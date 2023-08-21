<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Template;
use App\Models\Task;
use App\Models\Project;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ProjectController extends Controller
{
    public function projectshow()
    {
        $project=Project::with('template')->with('user')->get();
        return view('admin.project.projectshow', compact('project'));
    }
    public function create()
    {
        $users=User::where('is_admin','=',0)->get();
        $template=Template::all();
        return view('admin.project.create', compact('users','template'));
    }
    public function add(Request $request)
    {
        $Project = new Project();
 
         $Project->template_id = $request->template_id;
        $Project->user_id = $request->user_id;
       
        $Project->save();
 
        return back()->with('success', 'task add successfully');
    }
}
