<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicTable extends Migration
{
    /**
     * 執行資料庫遷移，建立 music 資料表
     */
    public function up()
    {
        Schema::create('music', function (Blueprint $table) {
            $table->id();
            $table->string('song_name');   // 歌曲名稱
            $table->string('spotify_id');  // Spotify 的 ID
            $table->timestamps();
        });
    }

    /**
     * 還原資料庫遷移，刪除 music 資料表
     */
    public function down()
    {
        Schema::dropIfExists('music');
    }
}
