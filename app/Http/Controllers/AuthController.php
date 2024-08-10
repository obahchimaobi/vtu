<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login_page()
    {
        return view('auth.login');
    }

    public function register_page()
    {
        return view('auth.register');
    }

    public function register(Request $register)
    {
        $register->validate([
            'full_name' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed',
        ]);
    }
}
