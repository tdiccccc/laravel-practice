<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Services\TweetService; //TweetServiceのインポート
use App\Models\Tweet;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, TweetService $tweetService)
    {
        //
        //return view('tweet.index',['name' => 'laravel']);
        //view laravelのヘルパー関数
        
        $tweets = $tweetService->getTweets();//つぶやきの一覧を取得 //Tweet::orderBy('created_at', 'DESC')->get();
      //$tweets = Tweet::all()->sortByDesc('created_at'); 上記同様、順番の変更 前者の記述のほうが高速  
        //dd($tweets);
        return view('tweet.index')
                ->with('tweets', $tweets);
                //->with('name', 'laravel')
                //->with('version','8');
    }
}
