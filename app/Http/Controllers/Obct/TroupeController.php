<?php

namespace App\Http\Controllers\Obct;

use App\AboutTroupe;
use App\CurrentShow;
use App\Http\Controllers\Controller;

class TroupeController extends Controller
{
    /**
     * @var AboutTroupe
     */
    private $aboutTroupe;

    public function __construct(AboutTroupe $aboutTroupe)
    {
        $this->aboutTroupe = $aboutTroupe;
    }

    public function troupe()
    {

        $currentShow = CurrentShow::where('active', 1)
                                  ->get();

        $aboutTroupe = $this->aboutTroupe->all();

        return view('obct.troupe',
                    [
                        'currentShow' => $currentShow,
                        'aboutTroupe' => $aboutTroupe
                    ]
        );
    }
}
