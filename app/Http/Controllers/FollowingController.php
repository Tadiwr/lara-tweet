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
     * This function will add follower for the currently signed in user
     */
    public function follow($followee_id)
    {

        // Creates a following model
        $following = Following::create([
            'follower' => auth()->user()->id,
            'followee' => $followee_id
        ]);


        $followee = User::all()->find($followee_id);
        $follower = User::all()->find(auth()->user()->id);

        $followee->follower_count++;
        $follower->following_count++;


        $followee->update();
        $follower->update();


        return redirect()->back();
    }

    /**
     * Method to unfollow a user
     *
     * @param int $followee_id is the id of the user that is to be unfollowed
     */
    public function unfollow($followee_id)
    {

        $key = [
            "follower" => auth()->user()->id,
            "followee" => $followee_id
        ];

        if(Following::where($key)->exists()) {

            // Get model representing the follower-followee relationship and delete it
            Following::where($key)->delete();

            // Decrementing the Followees follower count
            $followeeModel = User::all()->find($followee_id);
            $followeeModel->follower_count--;
            $followeeModel->update();

            // Decrementing the followers following count
            $followerModel = User::all()->find(auth()->user()->id);
            $followerModel->following_count--;
            $followerModel->update();

            return redirect()->back();
        } else {
            return abort(400, 'You don;t follow this user');
        }



    }

    public static function isFollowing($user_id) : bool {
        $key = [
            "follower" => auth()->user()->id,
            "followee" => $user_id
        ];

        return Following::where($key)->exists();

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
