<?php

namespace App\Http\Controllers\Obct;

use App\Auditions;
use App\CurrentShow;
use App\Performance;
use App\TroupeAudition;

use App\Http\Controllers\Controller;


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
     * @var Performance
     */
    private $performance;

    /**
     * AuditionsController constructor.
     */
    public function __construct(Auditions $auditions,
                                TroupeAudition $troupeAudition,
                                CurrentShow $currentShow,
                                Performance $performance)
    {
        $this->auditions = $auditions;
        $this->troupeAuditions = $troupeAudition;
        $this->currentShow = $currentShow;
        $this->performance = $performance;
    }

    public function auditions()
    {
        $troupeAudition = $this->troupeAuditions->all();

        $auditions = $this->auditions->where('audition_active', 1)
                                     ->get();

        $currentShow = CurrentShow::where('active', 1)
                                  ->get();

        $performance = $this->performance
                            ->where('active', 1)
                            ->get();

        return view('obct.auditions', [
            'currentShow' => $currentShow,
            'troupeAuditions' => $troupeAudition,
            'auditions' => $auditions,
            'performances' => $performance
        ]);
    }
}
