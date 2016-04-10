<?php

namespace App\Http\Controllers\Obct;

use App\About;
use App\CurrentShow;
use App\Http\Controllers\Controller;


class AboutController extends Controller
{
    public function about()
    {
        $about = About::all();

        $currentShow = CurrentShow::where('active', 1)
                                  ->get();
        return view('obct.about',
                    [
                        'about' => $about,
                        'currentShow' => $currentShow
                    ]
        );
    }
}
