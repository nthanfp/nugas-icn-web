<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stephenjude\FilamentBlog\Models\Post;

class BlogController extends Controller
{
    /**
     * Display the blog home page with a list of published posts.
     *
     * @return \Illuminate\View\View
     */
    public function blogHome()
    {
        // Retrieve all published posts with their authors and categories
        $posts = Post::published()->with(['author', 'category'])->get();

        return view('blog.index', compact('posts'));
    }

    /**
     * Display a specific blog post based on the given slug.
     *
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function blogPost(string $slug)
    {
        // Retrieve the specific published post with its author and category
        $post = Post::published()
            ->where('slug', $slug)
            ->with(['author', 'category'])
            ->firstOrFail();

        // Retrieve all posts with their categories for archives
        $posts = Post::with('category')->get();

        // Group the posts by month and year for the archives
        $archives = $posts->groupBy(function ($post) {
            return $post->created_at->format('F Y');
        });

        return view('blog.post', compact('post', 'archives'));
    }
}
