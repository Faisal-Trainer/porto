<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'slug',
        'image',
        'excerpt',
        'content',
        'is_published',
        'published_at',
        'is_journal',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    protected $with = ['author', 'category'];

    protected function casts(): array
    {
        return [
            'is_published' => 'boolean',
            'is_journal' => 'boolean',
            'published_at' => 'datetime',
        ];
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function readingTime(): int
    {
        $words = str_word_count(strip_tags($this->content));
        $minutes = ceil($words / 200);

        return (int) ($minutes < 1 ? 1 : $minutes);
    }
}
