<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegister; 
use App\Http\Controllers\UserData;
use App\Http\Controllers\CreateBlog;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
})->name("login");

Route::get('/register', function () {
    return view('register');
})->name("register");

Route::get('/dashboard',[UserData::class,'UserData'])->name("dashboard")->middleware("auth");

Route::get('/createblog',[CreateBlog::class,'BlogPost'])->name("createblog")->middleware("auth");

Route::post('/loginForm', [LoginRegister::class,"LoginForm"]);

Route::post('/registerForm', [LoginRegister::class,"RegisterForm"]);

Route::post('/logoutForm', [LoginRegister::class,"LogoutForm"]);
