<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageViewController extends Controller
{
    public function home(){
        return view('home');
    }

    public function layanan(){
        return view('layanan.index');
    }

    public function layananCustom($slug){
        return view('layanan.custom');
    }

    public function blog(){
        return view('blog.index');
    }

    public function blogPost(){
        return view('blog.post');
    }
}
