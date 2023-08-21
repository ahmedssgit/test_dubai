<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;
use App\Models\Template;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class TemplateController extends Controller
{
    public function templateshow()
    {
        $templates = Template::with('tasks')->get();

        return view('admin.template.templateshow', compact('templates'));
    }
    public function create()
    {
        $task=Task::all();
        return view('admin.template.create', compact('task'));
    }
    public function add(Request $request)
    {
        $selectedTasks = $request->input('tasks', []); // Get selected task IDs as an array

        $template = new Template();
        $template->title = $request->title;
        $template->save(); // Save the template first
        
        foreach ($selectedTasks as $taskId) {
            Task::where('id', $taskId)->update(['template_id' => $template->id]);
        }
        
 
        return back()->with('success', 'task add successfully');
    }
}
