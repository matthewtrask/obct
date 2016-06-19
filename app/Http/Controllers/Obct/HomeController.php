<?php

namespace App\Http\Controllers\Obct;

use App\Http\Controllers\Controller;
use App\WhatsNew;
use App\CurrentShow;

class HomeController extends Controller
{
    /**
     * @var WhatsNew
     */
    private $whatsNew;

    /**
     * @var CurrentShow
     */
    private $currentShow;

    public function __construct(WhatsNew $whatsNew, CurrentShow $currentShow)
    {
        $this->whatsNew = $whatsNew;
        $this->currentShow= $currentShow;
    }

    public function home()
    {
        $whatsNew = $this->whatsNew
                ->where('active', 1)
                ->orderBy('id', 'DESC')
                ->get();

        $currentShow = $this->currentShow
                ->where('active', 1)
                ->get();

        return view('obct.home', [
            'whatsNew' => $whatsNew,
            'currentShow' => $currentShow
        ]);
    }
}
