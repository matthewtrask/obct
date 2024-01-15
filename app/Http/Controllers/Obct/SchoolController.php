<?php

namespace App\Http\Controllers\Obct;

use App\Schools;
use App\CurrentShow;
use App\SchoolPoints;
use App\Performance;

use App\Http\Controllers\Controller;

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
                        'performances' => $performance
                    ]
        );
    }
}
