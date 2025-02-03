<?php

namespace App\Pipelines;

use Closure;
use App\Models\Music;

class FetchSongPipe
{
    public function handle($data, Closure $next)
    {
        // 使用者的情緒向量
        $userEmotion = $data['emotionData'];
        $keys = ['content', 'sad', 'angry', 'relax', 'love', 'party'];

        // 取得所有有情緒數據的歌曲
        $songs = Music::with('musicEmotion')->get();
        
        $bestSong = null;
        $minDistance = INF; // 無限大，作為初始比較值
        
        foreach ($songs as $song) {
            // 確保歌曲有情緒數據
            if (!$song->musicEmotion) {
                continue;
            }
            
            $songEmotion = $song->musicEmotion;
            $distance = 0;
            
            // 計算歐氏距離
            foreach ($keys as $key) {
                // 假設兩邊都有定義該情緒，若不確定可以加上預設值處理
                $songScore = (float) $songEmotion->{$key};
                $userScore = isset($userEmotion[$key]) ? (float) $userEmotion[$key] : 0;
                $distance += pow($songScore - $userScore, 2);
            }
            $distance = sqrt($distance);
            
            // 找出距離最小的歌曲
            if ($distance < $minDistance) {
                $minDistance = $distance;
                $bestSong = $song;
            }
        }
        
        // 若找不到任何符合情緒數據的歌曲，則可以設定適當的預設值或回傳錯誤訊息
        if (!$bestSong) {
            throw new \Exception('找不到符合推薦條件的歌曲');
        }
        
        $data['recommend'] = $bestSong;
        return $next($data);
    }
}