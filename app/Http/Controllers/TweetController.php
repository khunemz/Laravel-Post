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
        $tweets = Tweet::orderByDesc('updated_at')->get();
        
        return view('tweets.index',[
            'tweets' => $tweets
        ]);
    }

    public function create() {
        return view('tweets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
           'body' => 'required|max:140'
        ]);

        Tweet::create([
            'user_id' => auth()->id(), 
            'body' => $request->body,
            'like_count' => 0,
            'rt_count' => 0,
            'quote_count' => 0,
        ]);
        
        return redirect()->route('tweets.index');
    }

    public function show(Tweet $tweet)
    {        
        return view('tweets.show',[
            'tweet' => $tweet
        ]);
    }

    public function edit(Tweet $tweet)
    {        
        return view('tweets.edit',[
            'tweet' => $tweet
        ]);
    }
    public function update(Request $request, Tweet $tweet)
    {
        $request->validate([
            'body' => 'required|max:140',
            'like_count' => 'required|integer|min:0',
            'rt_count' => 'required|integer|min:0',
            'quote_count' => 'required|integer|min:0',
        ]);


        Tweet::where([['id', $tweet->id]])->update([
            'body' => $request->body,
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        return redirect()->route('tweets.show', ['tweet' => $tweet]);   
    }

    public function destroy(Tweet $tweet)
    {
        Tweet::where([['id', $tweet->id]])->delete();
        return redirect()->route('tweets.index');
    }
}
