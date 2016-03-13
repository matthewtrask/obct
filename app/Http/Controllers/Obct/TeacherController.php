<?php

namespace App\Http\Controllers\Obct;

use App\Http\Controllers\Controller;
use App\Teacher;
use App\CurrentShow;

class TeacherController extends Controller
{
    public function teachers()
    {
        $teachers = Teacher::all();
        $currentShow = CurrentShow::all();

        return view('obct.teachers',
                    [
                        'teachers' => $teachers,
                        'currentShow' => $currentShow
                    ]
        );
    }

}
