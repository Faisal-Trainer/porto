<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;

class BlogController
{
    public function index(): View
    {
        return view('pages.blog.index');
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
