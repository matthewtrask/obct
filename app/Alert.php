<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    public $table = 'alert';
    protected $model = 'alert';

    protected $fillable = [
        'alert',
        'active'
    ];
}
