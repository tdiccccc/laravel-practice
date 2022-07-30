<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
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
    public function __invoke(Request $request)
    {
        //
        //return view('tweet.index',['name' => 'laravel']);
        //view laravelのヘルパー関数
        $tweets = Tweet::all();
        //dd($tweets);
        return view('tweet.index')
                ->with('tweets', $tweets);
                //->with('name', 'laravel')
                //->with('version','8');
    }
}
