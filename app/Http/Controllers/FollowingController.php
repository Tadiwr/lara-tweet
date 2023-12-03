<?php

namespace App\Http\Controllers;

use App\Models\Following;
use App\Models\User;
use Illuminate\Http\Request;

class FollowingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * This function will adda follower for the currently signed in user
     */
    public function follow($user_id)
    {
        $following = new Following([
            'follower' => auth()->user()->id,
            'followee' => $user_id
        ]);

        $followee = User::all()->find($user_id);
        $follower = User::all()->find($user_id);

        $followee->follower_count++;
        $follower->following_count++;

        $following->save();

        $followee->save();
        $follower->save();


        return redirect()->back();
    }

    public function unfollow($user_id)
    {
        // Get record representing the follower-followee relationship
        $following = Following::all()
        ->where('follower', auth()->user()->id)
        ->where('followee', $user_id)
        ->first();

        if($following) {
            $following->delete();

            // Decrementing the follower count of the former followee
            $followee = User::all()->find($user_id);
            $followee->follower_count--;

            // Decrement the count of followings for the former follower
            $follower = User::all()->find(auth()->user()->id);
            $follower->following_count--;


            $followee->save();
            $follower->save();

            return redirect()->back();
        } else {
            return abort(404, 'User not found');
        }

    }

    public static function isFollowing($user_id) : bool {
        $followee = Following::all()
        ->where('follower', auth()->user()->id)
        ->where('followee', $user_id)
        ->first();

        if($followee) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Following $following)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Following $following)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Following $following)
    {
        //
    }
}
