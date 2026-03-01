<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'title',
        'description',
        'show_id',
        'event_date',
        'cover_image',
        'active',
        'order',
    ];

    protected $casts = [
        'event_date' => 'date',
        'active' => 'boolean',
    ];

    public function show(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Show::class);
    }
}
