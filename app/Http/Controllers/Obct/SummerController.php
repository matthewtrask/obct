<?php

namespace App\Http\Controllers\Obct;

use App\Summer;
use App\SummerInfo;
use App\CurrentShow;
use App\Performance;

use App\Http\Controllers\Controller;

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
        $summer = Summer::all();

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
                        'performances' => $performance
                    ]
        );
    }
}

