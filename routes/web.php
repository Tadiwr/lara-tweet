<?php

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

// Only authenticated users can access
Route::get('/', function () {

    $tweets = Tweet::with('user')->latest()->get();


    return view('index', [
        "tweets" => $tweets
    ]);
})->middleware('auth');

Route::get('/auth', [AuthController::class, 'show'])->name('login');

Route::post('/auth/login', [AuthController::class, 'login']);
Route::get('/auth/logout', [AuthController::class, 'logout']);


Route::post('/auth/create', [AuthController::class, 'create']);
Route::get('/auth/register', [AuthController::class, 'showCreate']);

Route::get('/account/{username}', [UserController::class, 'show']);

Route::get('/tweet', [TweetController::class, 'index'])->middleware('auth');
Route::post('/tweet/create', [TweetController::class, 'create']);
Route::get('/tweet/like/{id}', [TweetController::class, 'incLike'])->middleware('auth');
Route::get('/tweet/dislike/{id}', [TweetController::class, 'decLike'])->middleware('auth');

