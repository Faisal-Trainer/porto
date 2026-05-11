<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\View\View;

class BlogController
{
    public function index(): View
    {
        $posts = Post::with('category', 'author')
            ->where('is_published', true)
            ->latest()
            ->paginate(12);

        $categories = Category::pluck('name');

        return view('pages.blog.index', compact('posts', 'categories'));
    }

    public function show(string $slug): View
    {
        $post = Post::with('category', 'author')
            ->where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        return view('pages.blog.show', compact('post'));
    }
}
