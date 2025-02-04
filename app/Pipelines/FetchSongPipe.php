<?php

namespace App\Pipelines;

use Closure;
use App\Models\Music;

class FetchSongPipe
{
    public function handle($data, Closure $next)
    {
        // 使用者的情緒向量（範例格式）
        // [
        //    "content" => 0.750,
        //    "sad" => 0.100,
        //    "angry" => 0.050,
        //    "relax" => 0.800,
        //    "love" => 0.400,
        //    "party" => 0.300
        // ]
        $userEmotion = $data['emotionData'];
        $keys = ['content', 'sad', 'angry', 'relax', 'love', 'party'];

        // 取得使用者前兩名與後兩名情緒
        $userEmotionDesc = $userEmotion;
        arsort($userEmotionDesc); // 降冪排序：最高分在前
        $userTop2 = array_slice(array_keys($userEmotionDesc), 0, 2);
        
        $userEmotionAsc = $userEmotion;
        asort($userEmotionAsc); // 升冪排序：最低分在前
        $userBottom2 = array_slice(array_keys($userEmotionAsc), 0, 2);

        // 同時取得使用者的最高與最低（單一）
        $userTop1 = array_keys($userEmotionDesc)[0];
        $userBottom1 = array_keys($userEmotionAsc)[0];

        // 取得所有有情緒數據的歌曲
        $songs = Music::with('musicEmotion')->get();
        $candidates = [];

        // 搜尋符合主要條件的歌曲
        foreach ($songs as $song) {
            if (!$song->musicEmotion) {
                continue;
            }
            
            $songEmotion = $song->musicEmotion;
            $songVector = [];
            foreach ($keys as $key) {
                $songVector[$key] = (float)$songEmotion->{$key};
            }
            
            // 取得歌曲前兩名情緒（最高分）
            $songVectorDesc = $songVector;
            arsort($songVectorDesc);
            $songTop2 = array_slice(array_keys($songVectorDesc), 0, 2);
            
            // 取得歌曲後兩名情緒（最低分）
            $songVectorAsc = $songVector;
            asort($songVectorAsc);
            $songBottom2 = array_slice(array_keys($songVectorAsc), 0, 2);
            
            if (
                empty(array_diff($userTop2, $songTop2)) &&
                empty(array_diff($userBottom2, $songBottom2))
            ) {
                $candidates[] = $song;
            }
        }
        
        // 如果主要條件無候選歌曲，嘗試備選條件：符合使用者第一名與最後一名
        if (empty($candidates)) {
            $fallbackCandidates = [];
            foreach ($songs as $song) {
                if (!$song->musicEmotion) {
                    continue;
                }
                
                $songEmotion = $song->musicEmotion;
                $songVector = [];
                foreach ($keys as $key) {
                    $songVector[$key] = (float)$songEmotion->{$key};
                }
                
                // 取得歌曲最高情緒與最低情緒
                $songVectorDesc = $songVector;
                arsort($songVectorDesc);
                $songTop1 = array_keys($songVectorDesc)[0];
                
                $songVectorAsc = $songVector;
                asort($songVectorAsc);
                $songBottom1 = array_keys($songVectorAsc)[0];
                
                if ($songTop1 === $userTop1 && $songBottom1 === $userBottom1) {
                    $fallbackCandidates[] = $song;
                }
            }
            
            if (!empty($fallbackCandidates)) {
                $candidates = $fallbackCandidates;
            }
        }
        
        if (empty($candidates)) {
            throw new \Exception('找不到符合推薦條件的歌曲');
        }
        
        // 如果有多首符合條件的歌曲，隨機挑選一首
        $bestSong = $candidates[array_rand($candidates)];
        $data['recommend'] = $bestSong;
        
        return $next($data);
    }
}