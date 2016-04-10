<?php

namespace App\Http\Controllers\Obct;

use App\Http\Controllers\Controller;

use App\CurrentShow;
use App\Auditions;
use App\TroupeAudition;

class AuditionsController extends Controller
{
    /**
     * @var Auditions
     */
    private $auditions;

    /**
     * @var TroupeAudition
     */
    private $troupeAuditions;

    /**
     * @var CurrentShow
     */
    private $currentShow;

    /**
     * AuditionsController constructor.
     */
    public function __construct(Auditions $auditions, TroupeAudition $troupeAudition, CurrentShow $currentShow)
    {
        $this->auditions = $auditions;
        $this->troupeAuditions = $troupeAudition;
        $this->currentShow = $currentShow;
    }

    public function auditions()
    {
        $troupeAudition = $this->troupeAuditions->all();

        $auditions = $this->auditions->where('audition_active', 1)
                                     ->get();

        $currentShow = CurrentShow::where('active', 1)
                                  ->get();

        return view('obct.auditions', [
           'currentShow' => $currentShow,
           'troupeAuditions' => $troupeAudition,
           'auditions' => $auditions
        ]);
    }
}
