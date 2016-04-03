<?php

namespace App\Http\Controllers\Obct;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\JrTroupeAbout;
use App\CurrentShow;

class JrTroupeController extends Controller
{
    /**
     * @var JrTroupeAbout
     */
    private $jrTroupeAbout;

    /**
     * @var CurrentShow
     */
    private $currentShow;

    /**
     * @param JrTroupeAbout $jrTroupeInfo
     * @param CurrentShow $currentShow
     */
    public function __construct(JrTroupeAbout $jrTroupeInfo, CurrentShow $currentShow)
    {
        $this->jrTroupeAbout = $jrTroupeInfo;
        $this->currentShow   = $currentShow;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function jrTroupe()
    {
        $jrTroupe = $this->jrTroupeAbout->all();

        $currentShow = $this->currentShow->all();

        return view('obct.jrtroupe',
                    [
                        'currentShow' => $currentShow,
                        'jrTroupe'    => $jrTroupe
                    ]
        );
    }
}
