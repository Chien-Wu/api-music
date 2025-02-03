<?php

namespace App\Pipelines;

use Closure;

class ParseEmotionPipe
{
    public function handle($data, Closure $next)
    {
        $emotionData = json_decode($data['rawResponse'], true);
        if (json_last_error() !== JSON_ERROR_NONE || !is_array($emotionData)) {
            throw new \Exception('無法解析 OpenAI 回傳的 JSON 格式: ' . $data['rawResponse']);
        }
        $data['emotionData'] = $emotionData;
        return $next($data);
    }
}