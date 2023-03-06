<?php

namespace App\Http\Controllers\Obct;

use App\CurrentShow;
use App\Http\Controllers\Controller;
use App\Performance;
use App\Teacher;

class TeacherController extends Controller
{
    /**
     * @var Performance
     */
    private $performance;

    public function __construct(Performance $performance)
    {
        $this->performance = $performance;
    }

    public function teachers()
    {
        $teachers = Teacher::all();

        $performance = $this->performance
                            ->where('active', 1)
                            ->get();

        $currentShow = CurrentShow::where('active', 1)
                                  ->get();

        return view('obct.teachers',
            [
                'teachers' => $teachers,
                'performances' => $performance,
                'currentShow' => $currentShow,
            ]
        );
    }
}
