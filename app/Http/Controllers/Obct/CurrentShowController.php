<?php

namespace App\Http\Controllers\Obct;

use App\CurrentShow;
use App\Upcoming;
use App\Http\Controllers\Controller;

class CurrentShowController extends Controller
{
    /**
     * @var CurrentShow
     */
    private $currentShow;

    /**
     * @var Upcoming
     */
    private $upcoming;

    /**
     * @param CurrentShow $currentShow
     * @param Upcoming $upcoming
     */
    public function __construct(CurrentShow $currentShow, Upcoming $upcoming)
    {
        $this->currentShow = $currentShow;
        $this->upcoming = $upcoming;
    }

    public function currentShow()
    {
        $currentShow = $this->currentShow->all();

        $upcoming = $this->upcoming->all();


        return view('obct.currentShow',
                    [
                       'currentShow' => $currentShow,
                       'upcoming'    => $upcoming
                    ]
        );
    }
}
