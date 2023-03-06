<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    public $table = 'performance';

    protected $model = 'performance';

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'title',
        'teaser',
        'description',
        'dates',
        'price',
        'link',
        'cast_page',
        'show_image',
        'active',
        'upcoming',
        'auditions',
        'past',
    ];
}
