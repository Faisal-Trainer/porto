<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class project extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'slug',
        'kategori',
        'deskripsi',
        'thumbnail',
        'demo_url',
        'tanggal_rilis'
    ];

    protected $casts = [
        'tanggal_rilis' => 'date',
    ];
    public function technologies()
    {
        return $this->belongsToMany(technology::class);
    }
    public function getIsNewAttribute(): bool
    {
        if (!$this->tanggal_rilis) {
            return false;
        }

        return $this->tanggal_rilis->greaterThanOrEqualTo(
            Carbon::now()->subDays(30)
        );
    }
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($project) {
            $project->slug = Str::slug($project->judul);
        });
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
