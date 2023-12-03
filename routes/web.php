<?php

use App\Http\Controllers\FollowingController;
use App\Models\Tweet;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TweetController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Only authenticated users can access;
Route::get('/', function () {

    $all = Tweet::with('user')->latest()->get()->all();

    function map($tweet) {
            return Tweet::time_elapsed_string($tweet->created_at, false);
    }

    $time_elapsed = array_map('map', $all);


    return view('index', [
        "tweets" => $all,
        "times" => $time_elapsed

    ]);
})->middleware('auth');

// Authentication Routes
Route::get('/auth', [AuthController::class, 'show'])->name('login');
Route::post('/auth/login', [AuthController::class, 'login']);
Route::get('/auth/logout', [AuthController::class, 'logout']);
Route::post('/auth/create', [AuthController::class, 'create']);
Route::get('/auth/register', [AuthController::class, 'showCreate']);

// Account and User Routes
Route::get('/account/{username}', [UserController::class, 'show']);

// Tweet Routes
Route::get('/tweet', [TweetController::class, 'index'])->middleware('auth');
Route::post('/tweet/create', [TweetController::class, 'create']);
Route::get('/tweet/like/{id}', [TweetController::class, 'incLike'])->middleware('auth');
Route::get('/tweet/dislike/{id}', [TweetController::class, 'decLike'])->middleware('auth');

// Following Routes
Route::get('/follow/{user_id}', [FollowingController::class, 'follow']);
Route::get('/unfollow/{user_id}', [FollowingController::class, 'unfollow']);
