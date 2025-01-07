<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegister; 
use App\Http\Controllers\UserData;
use App\Http\Controllers\CreateBlog;
use App\Models\BlogPost; 
use App\Http\Controllers\BlogData; 

Route::get('/', fn() => view('index',["datas" => BlogPost::all()]))->name("index");

Route::get('/login', fn() => view("login"))->name("login");

Route::get('/register', fn() => view('register'))->name("register");

Route::get('/dashboard',[UserData::class,'UserData'])->name("dashboard")->middleware("auth");

Route::get('/createblog',[CreateBlog::class,'BlogPost'])->name("createblog")->middleware("auth");

Route::get("/blog/{id}",[BlogData::class,"BlogId"]);

Route::post('/loginForm', [LoginRegister::class,"LoginForm"]);

Route::post('/registerForm', [LoginRegister::class,"RegisterForm"]);

Route::post('/logoutForm', [LoginRegister::class,"LogoutForm"]);

Route::post('/blogpost', [UserData::class,"ArticlePost"]);
