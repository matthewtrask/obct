<?php

namespace App\Http\Controllers\Obct;

use App\CurrentShow;
use App\Http\Controllers\Controller;

class CurrentShowController extends Controller
{
    public function currentShow()
    {
        $currentShow = CurrentShow::all();


        return view('obct.currentShow',
                    [
                       'currentShow' => $currentShow,
                    ]
        );
    }
}
