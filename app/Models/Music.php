<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    // 其他模型設定...

    /**
     * 定義與 MusicEmotion 模型的一對一關聯
     */
    public function musicEmotion()
    {
        return $this->hasOne(MusicEmotion::class);
    }
}
