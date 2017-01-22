<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Summer extends Model
{
    use SoftDeletes;

    protected $table = 'summer';

    public $fillable = [
        'show_title',
        'active',
        'ages',
        'dates',
        'time',
        'cost',
        'show_times',
        'show_info',
        'show_image'
    ];
}
