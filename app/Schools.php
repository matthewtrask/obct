<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schools extends Model
{
    protected $table = 'schools';

    public $timestamps = false;

    protected $fillable = [
        'school',
        'location',
        'details',
        'updated_at',
    ];
}
