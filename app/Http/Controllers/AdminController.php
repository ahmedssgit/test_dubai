<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }
    public function usershow()
    {
        $users=User::where('is_admin','=',0)->get();
        return view('admin.usershow', compact('users'));
    }
}
