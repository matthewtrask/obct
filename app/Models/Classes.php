<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $fillable = [
        'name',
        'description',
        'age_range',
        'schedule',
        'session_type',
        'price',
        'start_date',
        'end_date',
        'capacity',
        'image',
        'active',
        'order',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date'   => 'date',
        'active'     => 'boolean',
        'price'      => 'decimal:2',
    ];
}
