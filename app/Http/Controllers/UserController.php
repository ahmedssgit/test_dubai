<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{

    public function register()
    {
        return view('register');
    }
    public function login()
    {
        return view('login');
    }
    public function loginPost(Request $request){

            $credetials = [
                'email' => $request->email,
                'password' => $request->password,
            ];
     
            if (Auth::attempt($credetials)) {
               if (Auth::user()->is_Admin())
               return redirect('/home')->with('success', 'Login Success admin');
            else 
            return 2;
            }
     
            return 3;
    }
    public function registerPost(Request $request)
    {
        $user = new User();
 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
 
        $user->save();
 
        return back()->with('success', 'Register successfully');
    }
    
    public function logout()
    {
        Auth::logout();
 
        return redirect()->route('login');
    }

}
