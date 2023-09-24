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
        return redirect('allTasks');
    }

    public function allTasks()
    {
        $user = User::where('user_id', '=', Session::get('loginID'))->first();
        if ($user) {
            if ($user->rule == 1) {
                // If the user's rule is 1, retrieve all tasks
                $tasks = Task::all();
            } else {
                // If the user's rule is not 1, retrieve tasks of the logged-in user
                $tasks = Task::where('user_id', $user->user_id)->get();
            }
        } else {
            // Handle the case where the user is not authenticated (e.g., redirect to login)
            return redirect('/login');
        }
    
        return view('allTasks', ['tasks' => $tasks]);
    }
    public function destroy(Task $task)
    {
        // Perform task deletion here
        $task->delete();

        return redirect('allTasks')->with('success', 'Task deleted successfully');
    }
    public function edit(Task $task)
    {
        return view('editTask', compact('task'));
    }
    public function update(Request $request, Task $task)
    {
        // Validate and update task details here
        $task->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'data'=>now(),
            'status'=>$request->input('status'),
        ]);

        return redirect('allTasks');
    }
    public function search(Request $request)
    {
        $searchQuery = $request->input('search');
        $user = User::where('user_id', '=', Session::get('loginID'))->first();
        if ($user->rule == 1) {
            // If rule is 1, search all tasks
            $tasks = Task::where(function ($query) use ($searchQuery) {
                $query->where('title', 'LIKE', "%$searchQuery%")
                ->orWhere('description', 'LIKE', "%$searchQuery%");
            })->get();
        } else {
            // If rule is 0, search only user's tasks
            $tasks = Task::where('user_id', '=', $user->user_id)
                ->where(function ($query) use ($searchQuery) {
                    $query->where('title', 'LIKE', "%$searchQuery%")
                    ->orWhere('description', 'LIKE', "%$searchQuery%");
                })->get();
        }
        return view('searchResults', ['tasks' => $tasks, 'searchQuery' => $searchQuery]);
    }
}
