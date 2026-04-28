<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Artisan;

class PostObserver
{
    /**
     * Handle the Post "created" event.
     */
    public function created(Post $post): void
    {
        if ($post->is_published) {
            Artisan::queue('seo:ping');
        }
    }

    /**
     * Handle the Post "updated" event.
     */
    public function updated(Post $post): void
    {
        // Ping if status changed to published
        if ($post->wasChanged('is_published') && $post->is_published) {
            Artisan::queue('seo:ping');
        }
    }
}
