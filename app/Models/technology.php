<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class technology extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'slug',
        'icon'
    ];
    public function projects()
    {
        return $this->belongsToMany(project::class);
    }
}
