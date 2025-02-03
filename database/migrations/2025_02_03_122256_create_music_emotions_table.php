<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicEmotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music_emotions', function (Blueprint $table) {
            $table->bigIncrements('id');

            // 外鍵欄位：參考 music 表的 id 欄位
            $table->unsignedBigInteger('music_id');
            $table->foreign('music_id')
                  ->references('id')
                  ->on('music')
                  ->onDelete('cascade');

            // 各種情緒分數欄位 (0 ~ 1, 三位小數)
            $table->decimal('content', 4, 3);
            $table->decimal('sad', 4, 3);
            $table->decimal('angry', 4, 3);
            $table->decimal('relax', 4, 3);
            $table->decimal('love', 4, 3);
            $table->decimal('party', 4, 3);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('music_emotions');
    }
}
