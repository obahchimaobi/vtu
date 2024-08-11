<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/')->name('home')->uses([HomeController::class, 'index']);

// auth controller
Route::get('/login', [AuthController::class, 'login_page'])->name('login.page');
Route::get('/register', [AuthController::class, 'register_page'])->name('register.page');
Route::get('/reset-password', [AuthController::class, 'reset_password_page'])->name('reset-password.page');

Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('user.dashboard');