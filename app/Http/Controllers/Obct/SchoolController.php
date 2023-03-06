<?php

namespace App\Http\Controllers\Obct;

use App\CurrentShow;
use App\Http\Controllers\Controller;
use App\Performance;
use App\SchoolPoints;
use App\Schools;

class SchoolController extends Controller
{
    /**
     * @var Performance
     */
    private $performance;

    public function __construct(Performance $performance)
    {
        $this->performance = $performance;
    }

    public function schools()
    {
        $schools = Schools::all();

        $schoolPoints = SchoolPoints::all();

        $currentShow = CurrentShow::where('active', 1)
                                  ->get();

        $performance = $this->performance
                            ->where('active', 1)
                            ->get();

        return view('obct.school',
            [
                'schools' => $schools,
                'schoolPoints' => $schoolPoints,
                'currentShow' => $currentShow,
                'performances' => $performance,
            ]
        );
    }
}
