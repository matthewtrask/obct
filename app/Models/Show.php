<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $fillable = [
        'title',
        'description',
        'teaser',
        'show_image',
        'status',
        'ticket_price',
        'ticket_url',
        'start_date',
        'end_date',
        'audition_date',
        'audition_info',
        'performance_times',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'audition_date' => 'date',
        'ticket_price' => 'decimal:2',
        'performance_times' => 'array',  // ADD THIS - casts to/from JSON automatically
    ];
}
