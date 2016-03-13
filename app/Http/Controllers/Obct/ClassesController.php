<?php

namespace App\Http\Controllers\Obct;

use App\Classes;
use Illuminate\Pagination\Paginator;
use App\CurrentShow;
use App\Http\Controllers\Controller;

class ClassesController extends Controller
{
    public function classes()
    {
        $classes = Classes::paginate(5);

        $currentShow = CurrentShow::all();

        $paginator = new Paginator($classes, count($classes), 5);

        return view('obct.classes',
                    [
                        'classes' => $classes,
                        'currentShow' => $currentShow,
                        'paginate' => $paginator
                    ]
        );
    }
}
