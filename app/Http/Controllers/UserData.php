<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserData extends Controller
{
    public function UserData() {
        $user = Auth::user();
        return view('dashboard', ["user" => $user]);
    }
}
