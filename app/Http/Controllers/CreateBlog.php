<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateBlog extends Controller
{
    public function BlogPost (){
        return view('create-blog');
    }
}
