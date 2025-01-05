<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginRegister extends Controller
{
    public function loginForm (Request $request) {
      if(Auth::attempt([
        "email" => $request->input("email"),
        "password" => $request->input("password")
        ])) {
          return redirect()->route('dashboard');
        }
      return redirect()->route('login');
    }
    
    public function registerForm (Request $request) {
      User::create([
        "name" => $request->input("name"),
        "email" => $request->input("email"),
        "password" => $request->input("password")
      ]);
      return redirect()->route('login');
    }

    public function LogoutForm () {
      Auth::logout();
      return redirect()->route('login');
    }
}
