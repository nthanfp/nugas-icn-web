<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stephenjude\FilamentBlog\Models\Post;

class BlogController extends Controller
{
    public function blogHome()
    {
        $posts = Post::published()->with(['author', 'category'])->get();

        return view('blog.index', compact('posts'));
    }

    public function blogPost($slug)
    {
        $post = Post::published()
            ->where('slug', $slug)
            ->with(['author', 'category'])
            ->firstOrFail();

        $posts = Post::with('category')->get();
        $archives = $posts->groupBy(function ($post) {
            return $post->created_at->format('F Y');
        });

        return view('blog.post', compact('post', 'archives'));
    }
}
