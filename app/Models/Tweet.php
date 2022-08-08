<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //protected $table ='tweet';
    //主キーの名前がtweet_idだった場合
    //protected $table ='tweet_id';

    //主キーが増分整数ではないことを宣言
    //public $incrementing = false;

    //主キーが整数でない場合
    //protected $KeyType ='string';
}
