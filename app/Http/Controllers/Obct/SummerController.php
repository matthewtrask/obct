<?php

namespace App\Http\Controllers\Obct;

use App\CurrentShow;
use App\Http\Controllers\Controller;
use App\Performance;
use App\Summer;
use App\SummerInfo;

class SummerController extends Controller
{
    /**
     * @var Performance
     */
    private $performance;

    public function __construct(Performance $performance)
    {
        $this->performance = $performance;
    }

    public function summer()
    {
        $summer = Summer::where('active', 1)->get();

        $summerInfo = SummerInfo::all();

        $currentShow = CurrentShow::where('active', 1)
                                  ->get();

        $performance = $this->performance
                            ->where('active', 1)
                            ->get();

        return view('obct.summer',
            [
                'summer' => $summer,
                'summerInfo' => $summerInfo,
                'currentShow' => $currentShow,
                'performances' => $performance,
            ]
        );
    }
}
