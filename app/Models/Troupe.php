<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Troupe extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'type',
        'description',
        'requirements',
        'image',
        'active',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];
}
