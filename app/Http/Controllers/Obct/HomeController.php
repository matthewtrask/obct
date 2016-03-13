<?php

namespace App\Http\Controllers\Obct;

use App\Http\Controllers\Controller;
use App\WhatsNew;
use App\CurrentShow;

class HomeController extends Controller
{
    public function home()
    {
        $whatsNew = WhatsNew::all();

        $currentShow = CurrentShow::all();

        return view('obct.home', [
            'whatsNew' => $whatsNew,
            'currentShow' => $currentShow
        ]);
    }
}
