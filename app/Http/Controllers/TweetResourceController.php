<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TweetController;
use App\Models\Tweet;


class TweetResourceController extends Controller
{
    //
    public function index()
    {
        $tweets = Tweet::orderByDesc('updated_at')->get();
        
        return response($tweets,200);
    }
}
