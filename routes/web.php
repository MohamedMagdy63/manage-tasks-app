<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/dashboard', [AuthController::class,'dashboard']);

Route::get('/login', [AuthController::class, 'login'])
-> name('login');

Route::post('/login', [AuthController::class, 'loginPost'])
-> name('login.post');


Route::get('/signup',[AuthController::class, 'signup'])
-> name('signup'); 

Route::post('/signup', [AuthController::class, 'signupPost'])
-> name('signup.post');


Route::get('/logout',[AuthController::class,'logout'])->name('logout');