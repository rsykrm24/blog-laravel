<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginRegister extends Controller
{
    public function loginForm (Request $request) {
      return [
        "email" => $request->input("email"),
        "password" => $request->input("password")
        ];
    }
    
    public function registerForm (Request $request) {
      return [
        "name" => $request->input("name"),
        "email" => $request->input("email"),
        "password" => $request->input("password")
        ];
    }
}
