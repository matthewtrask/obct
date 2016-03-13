<?php

namespace App\Http\Controllers\Obct;

use App\SchoolPoints;
use App\CurrentShow;
use App\Schools;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    public function schools()
    {
        $schools = Schools::all();

        $schoolPoints = SchoolPoints::all();

        $currentShow = CurrentShow::all();

        return view('obct.school',
                    [
                        'schools' => $schools,
                        'schoolPoints' => $schoolPoints,
                        'currentShow' => $currentShow
                    ]
        );
    }
}
