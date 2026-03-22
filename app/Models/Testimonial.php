<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'author_name',
        'author_role',
        'content',
        'photo',
        'featured',
        'active',
        'order',
    ];

    protected $casts = [
        'featured' => 'boolean',
        'active'   => 'boolean',
    ];
}
