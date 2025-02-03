<?php

namespace App\Pipelines;

use GuzzleHttp\Client;
use Closure;

class SendToOpenAIPipe
{
    public function handle($data, Closure $next)
    {
        $client = new Client();
        $apiKey = config('services.openai.api_key');
        
        try {
            $response = $client->post('https://api.openai.com/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $apiKey,
                    'Content-Type'  => 'application/json',
                ],
                'json' => [
                    'model'    => 'gpt-4o-mini', // 模型名稱依實際需求調整
                    'messages' => [
                        [
                            'role'    => 'system',
                            'content' => '你是一個根據使用者輸入句子判斷情緒分數的助手。請依據輸入的句子，回傳一個 JSON 物件，包含以下情緒鍵：content, sad, angry, relax, love, party，每個鍵的值為 0 到 1 之間、保留三位小數的分數。例如：{"content":0.750, "sad":0.100, "angry":0.050, "relax":0.800, "love":0.400, "party":0.300}。',
                        ],
                        [
                            'role'    => 'user',
                            'content' => "請根據以下句子判斷出各情緒的分數，並以 JSON 格式回傳：\n\n" . $data['text'],
                        ],
                    ],
                    'max_tokens'  => 50,
                    'temperature' => 0,
                ],
            ]);
        } catch (\Exception $e) {
            // 如果發生錯誤，可拋出例外讓後續處理捕捉
            throw new \Exception('呼叫 OpenAI API 失敗: ' . $e->getMessage());
        }
        
        // 將原始回傳的內容存入資料陣列中
        $body = json_decode($response->getBody(), true);
        $data['rawResponse'] = $body['choices'][0]['message']['content'] ?? '';

        return $next($data);
    }
}