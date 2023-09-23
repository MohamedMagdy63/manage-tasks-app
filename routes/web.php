<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TasksController;
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

Route::get('/', [AuthController::class,'dashboard'])->middleware('isLoggedIn');

Route::get('/login', [AuthController::class, 'login'])->middleware('alreadyLoggedIn');

Route::post('/login', [AuthController::class, 'loginPost'])
-> name('login.post');


Route::get('/signup',[AuthController::class, 'signup'])->middleware('alreadyLoggedIn'); 

Route::post('/signup', [AuthController::class, 'signupPost'])
-> name('signup.post');


Route::get('/logout',[AuthController::class,'logout']);


// ///////////////Tasks Routes/////////////
Route::get('/addTask', [TasksController::class, 'addTask']);


Route::post('/create-task', [TasksController::class, 'createTask'])->name('create.task');

