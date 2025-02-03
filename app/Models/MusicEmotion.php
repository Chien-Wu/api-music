<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MusicEmotion extends Model
{
    use HasFactory;

    // 若資料表名稱非預設複數形式，可手動指定 (這裡資料表名稱與模型名稱相對應，故可省略)
    // protected $table = 'music_emotions';

    /**
     * 可大量賦值的屬性
     */
    protected $fillable = [
        'music_id',
        'content',
        'sad',
        'angry',
        'relax',
        'love',
        'party',
    ];

    /**
     * 定義與 Music 模型的關聯（假設 Music 模型存在）
     */
    public function music()
    {
        return $this->belongsTo(Music::class);
    }
}
