<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Session; 

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Task; 
class TasksController extends Controller
{
    public function addTask()
    {
        return view('addTask');
    }
    public function createTask(Request $request)
    {
        $user = User::where('user_id', '=', Session::get('loginID'))->first();

        $tasksData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' =>'nullable',
        ]);
        $tasksData['title'] = $request ->title ;
        $tasksData['description'] = $request -> description ;
        $tasksData['data'] = now();
        $tasksData['status'] = false;
        if ($user) {
            $tasksData['user_id'] = $user->user_id;
        } else {
           
        }
        Task::create($tasksData);
        return redirect('/');
    }
}
