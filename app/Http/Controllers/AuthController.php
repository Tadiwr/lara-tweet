<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class AuthController extends Controller
{
    //

    /** Returns the index route for users to login */
    public function show() : View {
        return view('auth.index');
    }

    /** Returns a view for registering users */
    public function showCreate() : View {
        return view('auth.create');
    }

    /** Adds a user to the system */
    public function create(){

        validator(request()->all(), [
            'email' => ['required', 'email'],
            'password' => ['required'],
            'username' => ['required'],
            'name' => ['required'],
        ])->validate();

        $user = User::fromRequest(request()->all());



        if ($user->save()) {
            if (auth()->attempt(request()->only(['email', 'password']))) {
                return redirect('/');
            } else {
                return redirect()->back()->withErrors(['username', 'Something went wrong']);
            }
        } else {
            return redirect()->back()->withErrors(['Email', 'Account was not created']);
        }

    }

    // Handle form submission
    public function login() {


        validator(request()->all(), [
            'email' => ['required', 'email'],
            'password' => ['required']
        ])->validate();

        if(auth()->attempt(request()->only(["email", "password"]))) {
            return redirect('/');
        } else {
            return redirect()->back()->withErrors(['email' => 'Email or password is wrong']);
        }
    }

    public function logout()  {
        auth()->logout();

        return redirect()->back();
    }

}
