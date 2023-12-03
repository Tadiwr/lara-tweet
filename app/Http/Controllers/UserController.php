<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tweet;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Shows account page



    public function show(string $username) {

        $user = User::with('tweets')->where('username', $username)
        ->firstOrFail();


        $time_elapsed = array_map(function ($tweet) {
            return Tweet::time_elapsed_string($tweet->created_at, false);
        }, $user->tweets->all());

        if(auth()->id() != $user->id) {

            return view('account.guest', [
                "user" => $user,
                'times' => $time_elapsed
            ]);

        } else {
            return view('account.index', [
                "user" => $user,
                'times' => $time_elapsed
            ]);
        }
    }
}
