<?php

namespace App\Http\Controllers\Obct;

use App\About;
use App\troupeInfo;
use App\AboutTroupe;
use App\CurrentShow;
use App\Http\Controllers\Controller;

class TroupeController extends Controller
{
    /**
     * @var troupeInfo
     */
    private $troupeInfo;

    /**
     * @var CurrentShow
     */
    private $currentShow;

    /**
     * @var AboutTroupe
     */
    private $aboutTroupe;

    public function __construct(troupeInfo $troupeInfo, CurrentShow $currentShow, AboutTroupe $aboutTroupe)
    {
        $this->troupeInfo  = $troupeInfo;
        $this->currentShow = $currentShow;
        $this->aboutTroupe = $aboutTroupe;
    }

    public function troupe()
    {
        $troupeInfo = $this->troupeInfo->all();

        $currentShow = $this->currentShow->all();

        $aboutTroupe = $this->aboutTroupe->all();

        return view('obct.troupe',
                    [
                        'troupeInfo' => $troupeInfo,
                        'currentShow' => $currentShow,
                        'aboutTroupe' => $aboutTroupe
                    ]
        );
    }
}
