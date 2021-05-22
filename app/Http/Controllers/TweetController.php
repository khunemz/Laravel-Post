<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TweetController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $tweets = DB::select(DB::raw('SELECT * FROM `tweets` t left join `users` u on t.user_id = u.id'));
        
        return view('tweets.index',[
            'tweets' => $tweets
        ]);
    }

    public function store(Request $request)
    {
        //
        
    }

    public function show(Tweet $tweet)
    {
        //
    }

    public function update(Request $request, Tweet $tweet)
    {
        //
    }

    public function destroy(Tweet $tweet)
    {
        //
    }
}
