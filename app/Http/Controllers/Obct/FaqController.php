<?php

namespace App\Http\Controllers\Obct;

use App\Http\Controllers\Controller;
use App\Faq;
use App\CurrentShow;

class FaqController extends Controller
{
    /**
     * @var Faq
     */
    private $faq;

    /**
     * @var CurrentShow
     */
    private $currentShow;

    public function __construct(Faq $faq, CurrentShow $currentShow)
    {
        $this->faq = $faq;
        $this->currentShow = $currentShow;
    }

    public function faq()
    {
        $faq = $this->faq->all();
        $currentShow = CurrentShow::where('active', 1)
                                  ->get();

        return view('obct.faq',
                    [
                        'faq'         => $faq,
                        'currentShow' => $currentShow
                    ]
        );
    }
}
