<?php

namespace App\Http\Controllers\Obct;

use App\Classes;
use App\CurrentShow;
use App\Http\Controllers\Controller;
use App\Performance;

class ClassesController extends Controller
{
    /**
     * @var Performance
     */
    private $performance;

    public function __construct(Performance $performance)
    {
        $this->performance = $performance;
    }

    public function classes()
    {
        $classes = Classes::all();

        $performance = $this->performance
                            ->where('active', 1)
                            ->get();

        $currentShow = CurrentShow::where('active', 1)
                                  ->get();

        return view('obct.classes',
            [
                'classes' => $classes,
                'performances' => $performance,
                'currentShow' => $currentShow,
            ]
        );
    }
}
