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

    public function reset_password_page()
    {
        return view('auth.forgot-password');
    }

    public function dashboard()
    {
        return view('components.dashboard');
    }
}
