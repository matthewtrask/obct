<?php

namespace App\Http\Controllers\Obct;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\CurrentShow;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     *
     */
    public function contact()
    {
        $currentShow = CurrentShow::all();

        return view('obct.contact',
                    [
                        'currentShow' => $currentShow
                    ]
        );
    }

    /**
     * @param Request $request
     */
    public function postContact(Request $request)
    {
        return $request->all();
    }
}
