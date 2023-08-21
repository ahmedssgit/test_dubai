<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Template;
use App\Models\Task;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class TaskController extends Controller
{
    public function taskshow()
    {
        $task=Task::all();
        return view('admin.task.taskshow', compact('task'));
    }
    public function create()
    {
        $users=User::where('is_admin','=',0)->get();
        return view('admin.task.create', compact('users'));
    }
    public function add(Request $request)
    {
        $task = new Task();
 
        $task->title = $request->title;
        $task->user_id = $request->dropdown;
        $task->description = $request->description;
        $task->due_date = $request->due_date;
        $task->save();
 
        return back()->with('success', 'task add successfully');
    }
}
