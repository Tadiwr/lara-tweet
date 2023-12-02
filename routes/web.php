<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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
        return view('index');
})->middleware('auth');

Route::get('/auth', [AuthController::class, 'show'])->name('login');

Route::post('/auth/login', [AuthController::class, 'login']);


Route::post('/auth/create', [AuthController::class, 'create']);
Route::get('/auth/register', [AuthController::class, 'showCreate']);
