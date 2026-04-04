<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Support\LogOptions;
use Spatie\Activitylog\Models\Concerns\LogsActivity;

class Talent extends Model
{
    use SoftDeletes;
    use LogsActivity;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'skill',
        'experience',
        'availability',
        'bio',
        'cv_path',
        'read_at',
    ];

    protected $casts = [
        'read_at' => 'datetime',
    ];

    // =====================
    // Helper methods
    // =====================

    /**
     * Cek apakah pesan sudah dibaca
     */
    public function isRead(): bool
    {
        return $this->read_at !== null;
    }

    /**
     * Tandai sebagai sudah dibaca
     */
    public function markAsRead(): void
    {
        if (! $this->isRead()) {
            $this->update(['read_at' => now()]);
        }
    }

    // =====================
    // Scopes
    // =====================

    /**
     * Hanya yang belum dibaca
     */
    public function scopeUnread($query)
    {
        return $query->whereNull('read_at');
    }

    /**
     * Filter by skill
     */
    public function scopeBySkill($query, string $skill)
    {
        return $query->where('skill', $skill);
    }

    /**
     * Filter by availability
     */
    public function scopeByAvailability($query, string $availability)
    {
        return $query->where('availability', $availability);
    }

    // =====================
    // Accessors
    // =====================

    /**
     * Label skill yang readable
     */
    public function getSkillLabelAttribute(): string
    {
        return match ($this->skill) {
            'frontend' => 'Frontend Development',
            'backend' => 'Backend Development',
            'fullstack' => 'Fullstack Development',
            'uiux' => 'UI/UX Design',
            'social_media' => 'Social Media & Content',
            'it_support' => 'IT Support',
            default => 'Lainnya',
        };
    }

    /**
     * Label experience yang readable
     */
    public function getExperienceLabelAttribute(): string
    {
        return match ($this->experience) {
            'beginner' => 'Pemula',
            'junior' => 'Junior',
            'intermediate' => 'Intermediate',
            default => $this->experience,
        };
    }

    /**
     * Label availability yang readable
     */
    public function getAvailabilityLabelAttribute(): string
    {
        return match ($this->availability) {
            'lt10' => '< 10 jam/minggu',
            '10-20' => '10–20 jam/minggu',
            '20-40' => '20–40 jam/minggu',
            'fulltime' => 'Full-time',
            default => $this->availability,
        };
    }

    /**
     * URL file CV kalau ada
     */
    public function getCvUrlAttribute(): ?string
    {
        return $this->cv_path
            ? asset('storage/'.$this->cv_path)
            : null;
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logFillable()
            ->logOnlyDirty();
    }
}
