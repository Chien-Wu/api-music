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
                    'model'    => 'gpt-4o-mini', // 根據實際需求調整模型名稱
                    'messages' => [
                        [
                            'role'    => 'system',
                            'content' => '你是一個根據使用者輸入句子判斷情緒分數的助手。請根據輸入的句子，嚴格回傳符合以下 JSON Schema 的回應，且不要包含任何其他文字或標記。JSON Schema 如下：{
                                "type": "object",
                                "properties": {
                                    "content": {"type": "number"},
                                    "sad": {"type": "number"},
                                    "angry": {"type": "number"},
                                    "relax": {"type": "number"},
                                    "love": {"type": "number"},
                                    "party": {"type": "number"}
                                },
                                "required": ["content", "sad", "angry", "relax", "love", "party"],
                                "additionalProperties": false
                            }。例如：{"content": 0.750, "sad": 0.100, "angry": 0.050, "relax": 0.800, "love": 0.400, "party": 0.300}',
                        ],
                        [
                            'role'    => 'user',
                            'content' => "請根據以下句子判斷出各情緒的分數，並以 JSON 格式回傳：\n\n" . $data['text'],
                        ],
                    ],
                    'max_tokens'  => 50,
                    'temperature' => 0,
                    'response_format' => [
                        'type' => 'json_schema',
                        'json_schema' => [
                            'name' => 'emotionScores', // 必要的名稱參數
                            'strict' => true,
                            'schema' => [
                                'type' => 'object',
                                'properties' => [
                                    'content' => ['type' => 'number'],
                                    'sad'     => ['type' => 'number'],
                                    'angry'   => ['type' => 'number'],
                                    'relax'   => ['type' => 'number'],
                                    'love'    => ['type' => 'number'],
                                    'party'   => ['type' => 'number'],
                                ],
                                'required' => ['content', 'sad', 'angry', 'relax', 'love', 'party'],
                                'additionalProperties' => false, // 禁止額外屬性
                            ],
                        ],
                    ],
                ],
            ]);
        } catch (\Exception $e) {
            throw new \Exception('呼叫 OpenAI API 失敗: ' . $e->getMessage());
        }
        
        $body = json_decode($response->getBody(), true);
        $data['rawResponse'] = $body['choices'][0]['message']['content'] ?? '';

        return $next($data);
    }
}