<?php

namespace App\Http\Controllers\Obct;

use App\Http\Controllers\Controller;
use App\Performance;
use App\TroupeAudition;

class AuditionsController extends Controller
{
    /**
     * @var Performance
     */
    private $performance;

    /**
     * @var TroupeAudition
     */
    private $troupeAuditions;

    /**
     * AuditionsController constructor.
     */
    public function __construct(Performance $performance, TroupeAudition $troupeAudition)
    {
        $this->performance = $performance;
        $this->troupeAuditions = $troupeAudition;
    }

    public function auditions()
    {
        $troupeAudition = $this->troupeAuditions->all();

        $auditions = $this->performance
                            ->where('auditions', 1)
                            ->get();

        $performance = $this->performance
                            ->where('active', 1)
                            ->get();

        return view('obct.auditions', [
            'auditions' => $auditions,
            'performances' => $performance,
            'troupeAuditions' => $troupeAudition,
        ]);
    }
}
