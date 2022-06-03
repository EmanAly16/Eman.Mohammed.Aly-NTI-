<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }
    public function register()
    {
        return view('Auth.register');
    }
    public function logout()
    {
        // destroy session
        return redirect()->route('users.login');
    }
    public function allUsers()
    {
        $users = User::all();
        return view('Auth.all',compact('users'));
    }
}
