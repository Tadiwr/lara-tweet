<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Shows account page
    public function show(string $username) {

        $user = User::where('username', $username)
        ->firstOrFail();

        if(auth()->guest()) {
            return view('account.guest', [
                "user" => $user
            ]);
        } else {
            return view('account.index', [
                "user" => $user
            ]);
        }
    }
}
