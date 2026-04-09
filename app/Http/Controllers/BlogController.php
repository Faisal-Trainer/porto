<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;

class BlogController
{
    public function index(): View
    {
        $posts = Post::with('category', 'author')
            ->where('is_published', true)
            ->whereNotNull('published_at')
            ->latest('published_at')
            ->paginate(9);

        return view('pages.blog.index', compact('posts'));
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
