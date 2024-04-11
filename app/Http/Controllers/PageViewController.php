<?php

namespace App\Http\Controllers;

use App\Models\JokiCategory;
use Illuminate\Http\Request;

class PageViewController extends Controller
{
    public function home(){
        $categories = JokiCategory::select('name', 'slug')->get();
        
        return view('home', compact('categories'));
    }

    public function layanan(){
        $categories = JokiCategory::select('name', 'slug')->get();

        return view('layanan.index', compact('categories'));
    }

    public function layananCustom($slug){
        $categories = JokiCategory::select('name', 'slug')->get();

        return view('layanan.custom', compact('categories'));
    }

    public function blog(){
        $categories = JokiCategory::select('name', 'slug')->get();

        return view('blog.index', compact('categories'));
    }

    public function blogPost(){
        $categories = JokiCategory::select('name', 'slug')->get();
        
        return view('blog.post', compact('categories'));
    }
}
