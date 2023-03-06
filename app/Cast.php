<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    public $table = 'cast';

    protected $model = 'cast';

    protected $fillable = [
        'cast_id', 'show_id', 'student', 'role', 'cast', 'active',
    ];
}
