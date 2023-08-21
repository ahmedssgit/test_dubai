<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Template;
use App\Models\Task;
use App\Models\Project;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class customerController extends Controller
{
    public function index(){
        $id=Auth::id();
        $tasks=Task::where('user_id','=',$id)->get();
        return view('user.show', compact('tasks'));
    }
    public function complete($id){
        Task::where('id','=',$id)->update(['status' => 'complete']);
        return back();
    }
    public function note($id){
        return view('user.note', compact('id'));
    }
    public function add_note(Request $request,$id){
       
        Task::where('id','=',$id)->update(['note' => $request->note]);
        return redirect()->route('customer.home'); 
    }
}
