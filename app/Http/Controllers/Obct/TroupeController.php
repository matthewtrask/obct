<?php

namespace App\Http\Controllers\Obct;

use App\AboutTroupe;
use App\CurrentShow;
use App\Performance;

use App\Http\Controllers\Controller;

class TroupeController extends Controller
{
    /**
     * @var AboutTroupe
     */
    private $aboutTroupe;

    /**
     * @var Performance
     */
    private $performance;

    public function __construct(AboutTroupe $aboutTroupe, Performance $performance)
    {
        $this->aboutTroupe = $aboutTroupe;
        $this->performance = $performance;
    }

    public function troupe()
    {

        $currentShow = CurrentShow::where('active', 1)
                                  ->get();

        $aboutTroupe = $this->aboutTroupe->all();

        $performance = $this->performance
                            ->where('active', 1)
                            ->get();

        return view('obct.troupe',
                    [
                        'currentShow'  => $currentShow,
                        'aboutTroupe'  => $aboutTroupe,
                        'performances' => $performance
                    ]
        );
    }
}
