<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class invitations extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'theme',
        'quote',
        'music_url',
        'is_active',
        'created_at',
        'updated_at',
    ];
}
