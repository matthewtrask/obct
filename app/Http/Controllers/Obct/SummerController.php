<?php

namespace App\Http\Controllers\Obct;
use App\Summer;
use App\SummerInfo;
use App\CurrentShow;
use App\Http\Controllers\Controller;

class SummerController extends Controller
{
    public function summer()
    {
        $summer = Summer::all();

        $summerInfo = SummerInfo::all();

        $currentShow = CurrentShow::all();

        return view('obct.summer',
                    [
                        'summer' => $summer,
                        'summerInfo' => $summerInfo,
                        'currentShow' => $currentShow
                    ]
        );
    }
}

