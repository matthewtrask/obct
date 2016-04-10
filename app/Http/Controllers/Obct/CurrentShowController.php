<?php

namespace App\Http\Controllers\Obct;

use App\CurrentShow;
use App\Upcoming;
use App\Http\Controllers\Controller;

class CurrentShowController extends Controller
{
    public function currentShow()
    {
        $currentShow = CurrentShow::where('active', 1)
                                        ->get();

        $upcoming = Upcoming::where('active', 1)
                                    ->get();


        return view('obct.currentShow',
                    [
                       'currentShow' => $currentShow,
                       'upcoming'    => $upcoming
                    ]
        );
    }
}
