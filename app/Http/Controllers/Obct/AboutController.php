<?php

namespace App\Http\Controllers\Obct;

use App\About;
use App\CurrentShow;
use App\Http\Controllers\Controller;
use App\Performance;

class AboutController extends Controller
{
    /**
     * @var Performance
     */
    private $performance;

    public function __construct(Performance $performance)
    {
        $this->performance = $performance;
    }

    public function about()
    {
        $about = About::all();

        $currentShow = CurrentShow::where('active', 1)
                                  ->get();

        $performance = $this->performance
            ->where('active', 1)
            ->get();

        return view('obct.about',
            [
                'about' => $about,
                'performances' => $performance,
                'currentShow' => $currentShow,
            ]
        );
    }
}
