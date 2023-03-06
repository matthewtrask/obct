<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WhatsNew extends Model
{
    protected $table = 'whatsNew';

    protected $fillable = [
        'title', 'content', 'button', 'active',
    ];
}
