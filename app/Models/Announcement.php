<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $fillable = [
        'type',
        'title',
        'content',
        'link_url',
        'link_text',
        'active',
        'expires_at'
    ];
}
