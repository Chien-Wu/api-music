<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class MusicController extends Controller
{
    /**
     * 回傳隨機 10 筆音樂資料
     */
    public function randomTen()
    {
        // 以隨機順序取得 10 筆資料
        $songs = Music::inRandomOrder()->limit(10)->get();
        
        // 回傳 JSON
        return response()->json($songs);
    }
    public function recommend(Request $request)
    {
        $request->validate([
            'text' => 'required|string',
        ]);
        $text = $request->input('text');

        try {
            $result = app(Pipeline::class)
                ->send(['text' => $text])
                ->through([
                    \App\Pipelines\SendToOpenAIPipe::class,
                    \App\Pipelines\ParseEmotionPipe::class,
                    \App\Pipelines\FetchSongPipe::class,
                ])
                ->thenReturn();
        } catch (\Exception $e) {
            return response()->json([
                'error'   => '流程處理失敗',
                'message' => $e->getMessage(),
            ], 500);
        }
        
        return response()->json([
            'text'     => $text,
            'emotion'  => $result['emotionData'],
            'recommend'=> $result['recommend'],
        ]);
    }
}
