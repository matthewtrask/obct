<?php

namespace App\Http\Controllers\Obct;

use App\CurrentShow;
use App\Http\Controllers\Controller;
use App\Performance;

class CurrentShowController extends Controller
{
    /**
     * @var Performance
     */
    private $performance;

    public function __construct(Performance $performance)
    {
        $this->performance = $performance;
    }

    public function currentShow()
    {
        $currentShow = CurrentShow::where('active', 1)
                                        ->get();

        $performance = $this->performance
                ->where('active', 1)
                ->get();

        $upcoming = $this->performance
                ->where('upcoming', 1)
                ->get();

        return view('obct.currentShow',
            [
                'currentShow' => $currentShow,
                'upcoming' => $upcoming,
                'performances' => $performance,
            ]
        );
    }
}
