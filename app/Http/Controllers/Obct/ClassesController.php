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

        $currentShow = CurrentShow::where('active', 1)
                                  ->get();

        return view('obct.classes',
                    [
                        'classes' => $classes,
                        'currentShow' => $currentShow,
                    ]
        );
    }
}
