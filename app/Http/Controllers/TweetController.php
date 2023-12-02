<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('tweet.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $req = request()->all();
        $tweet = new Tweet();
        $tweet->content = $req['content'];
        $tweet->user_id = auth()->id();

        if ($tweet->save()) {
            return redirect('/');
        } else {
            return redirect()->back()->withErrors(['Tweet', 'Tweet was not saved']);
        }


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tweet $tweet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tweet $tweet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tweet $tweet)
    {
        //
    }

    public function incLike($id) {
        $tweet = Tweet::findOrFail($id);
        $tweet->like_count+= 1;

        $tweet->save();

        return redirect()->back();
    }

    public function decLike($id) {
        $tweet = Tweet::findOrFail($id);
        $tweet->like_count-= 1;

        $tweet->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tweet $tweet)
    {
        //
    }
}
