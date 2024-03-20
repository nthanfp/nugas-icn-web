<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageViewController extends Controller
{
    public function home(){
        return view('home');
    }

    public function blog(){
        return view('blog.index');
    }

    public function blogPost(){
        return view('blog.post');
    }
}
