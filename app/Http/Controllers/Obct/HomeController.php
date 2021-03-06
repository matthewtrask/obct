<?php

namespace App\Http\Controllers\Obct;

use App\Http\Controllers\Controller;

use App\Alert;
use App\WhatsNew;
use App\CurrentShow;
use App\Performance;

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

    /**
     * @var Alert
     */
    private $alert;

    /**
     * @var Performance
     */
    private $performance;

    public function __construct(WhatsNew $whatsNew, CurrentShow $currentShow, Alert $alert, Performance $performance)
    {
        $this->whatsNew = $whatsNew;
        $this->currentShow= $currentShow;
        $this->alert = $alert;
        $this->performance = $performance;
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

        $performance = $this->performance
                ->where('active', 1)
                ->get();

        $alert = $this->alert
                ->where('active', 1)
                ->get();

        return view('obct.home', [
            'whatsNew' => $whatsNew,
            'currentShow' => $currentShow,
            'performances' => $performance,
            'alerts' => $alert
        ]);
    }
}
