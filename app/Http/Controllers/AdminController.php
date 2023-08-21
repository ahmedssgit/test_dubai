<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }
    public function usershow()
    {
        $users=User::where('is_admin','=',0)->get();
        return view('admin.user.usershow', compact('users'));
    }

    public function delete($id)
    {
        $users=User::where('id','=',$id)->delete();
        return back();
    }
    public function edit($id)
    {
        $user=User::find($id);
        return view('admin..user.edit', compact('user'));
    }
    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'string|max:254',
            'email' => ['required',
                Rule::unique('users')->ignore($id),
            ],
        
        ]);
        if ($validator->fails()) {
            return back();
        }

        $data = $request->all();
        $user = User::findOrFail($id);
        $user->update($data);
        return redirect()->route('admin.user.usershow');
    }
}
