<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class costumer extends Model
{
    protected $fillable = [
        'username',
        'email',
        'phone',
        'subject',
        'message'
    ];
}
