<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

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
}
