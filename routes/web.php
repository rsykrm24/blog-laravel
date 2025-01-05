<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegister; 

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/loginForm', [LoginRegister::class,"loginForm"]);

Route::post('/registerForm', [LoginRegister::class,"registerForm"]);
