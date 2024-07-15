<?php

namespace App\Http\Controllers;

use App\Models\JokiCategory;
use Illuminate\Http\Request;

class PageViewController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        // Retrieve categories for the home page
        $categories = JokiCategory::select('name', 'slug')->get();
        
        return view('home', compact('categories'));
    }

    /**
     * Display the layanan page.
     *
     * @return \Illuminate\View\View
     */
    public function layanan()
    {
        // Retrieve categories for the layanan page
        $categories = JokiCategory::select('name', 'slug')->get();

        return view('layanan.index', compact('categories'));
    }

    /**
     * Display the custom layanan page based on the given slug.
     *
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function layananCustom(string $slug)
    {
        // Retrieve categories for the custom layanan page
        $categories = JokiCategory::select('name', 'slug')->get();

        return view('layanan.custom', compact('categories'));
    }

    /**
     * Display the blog page.
     *
     * @return \Illuminate\View\View
     */
    public function blog()
    {
        // Retrieve categories for the blog page
        $categories = JokiCategory::select('name', 'slug')->get();

        return view('blog.index', compact('categories'));
    }

    /**
     * Display a specific blog post page.
     *
     * @return \Illuminate\View\View
     */
    public function blogPost()
    {
        // Retrieve categories for the blog post page
        $categories = JokiCategory::select('name', 'slug')->get();
        
        return view('blog.post', compact('categories'));
    }
}
