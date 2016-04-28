<?php

namespace App\Http\Controllers\Obct;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\CurrentShow;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    /**
     *
     */
    public function contact()
    {
        $currentShow = CurrentShow::where('active', 1)
                                  ->get();

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
        $input = Input::all('name', 'phone', 'email', 'message');
        $name = $input['name'];
        $phone = $input['phone'];
        $email = $input['email'];
        $message = $input['message'];

        $this->mail($name, $phone, $email, $message);

        return redirect('/contact')->with('message', 'Message sent!');
    }

    public function mail($name, $phone, $email, $message)
    {

        $emailName = $name;
        $emailPhone = $phone;
        $emailEmail = $email;
        $emailMessage = $message;

        Mail::send('emails.contact',
            [
                'name' => $emailName,
                'phone' => $emailPhone,
                'email' => $emailEmail,
                'emailMessage' => $emailMessage

            ],
            function ($m) {
                $m->from('Contact@Offbroadwaykids.net', 'OBCT Message')->subject('New message from OBCT');

                $m->to('offbroadway@msn.com');
            }
        );
    }
}
