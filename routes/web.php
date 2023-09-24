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

Route::get('/allTasks', [TasksController::class, 'allTasks'])->name('allTasks');

Route::delete('/allTasks/{task}', [TasksController::class, 'destroy'])->name('tasks.destroy');

Route::get('/tasks/{task}/edit', [TasksController::class, 'edit'])->name('tasks.edit');

Route::put('/tasks/{task}', [TasksController::class, 'update'])->name('tasks.update');

Route::get('/tasks/search', [TasksController::class, 'search'])->name('tasks.search');

