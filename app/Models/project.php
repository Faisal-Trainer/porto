<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * @property \Carbon\Carbon|null $tanggal_rilis
 */
class Project extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $fillable = [
        'judul',
        'slug',
        'kategori',
        'deskripsi',
        'thumbnail',
        'demo_url',
        'tanggal_rilis',
    ];

    protected function casts(): array
    {
        return [
            'tanggal_rilis' => 'date',
        ];
    }

    public function technologies()
    {
        return $this->belongsToMany(Technology::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getIsNewAttribute(): bool
    {
        if (! $this->tanggal_rilis) {
            return false;
        }

        return $this->tanggal_rilis->greaterThanOrEqualTo(
            Carbon::now()->subDays(30)
        );
    }

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($project) {
            $project->slug = Str::slug($project->judul);
        });
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logFillable()
            ->logOnlyDirty();
    }
}
