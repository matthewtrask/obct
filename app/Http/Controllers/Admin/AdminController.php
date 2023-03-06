<?php

namespace App\Http\Controllers\Admin;

use App\Alert;
use App\Classes;
use App\Http\Controllers\Controller;
use App\User;
use App\WhatsNew;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * @var User
     */
    private $user;

    /**
     * @var WhatsNew
     */
    private $whatsNew;

    /**
     * @var Classes
     */
    private $classes;

    /**
     * @var Alert
     */
    private $alert;

    /**
     * Create a new controller instance.
     */
    public function __construct(User $user, WhatsNew $whatsNew, Classes $classes, Alert $alert)
    {
        $this->middleware('auth');

        $this->user = $user;
        $this->whatsNew = $whatsNew;
        $this->classes = $classes;
        $this->alert = $alert;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = $this->classes->get();

        $alert = $this->alert->where('active', 1)->get();

        $classCount = count($classes);

        return view('admin.home', [
            'classes' => $classCount,
            'alert' => $alert,
        ]);
    }

    public function uploadImages(Request $request)
    {
    }

    public function newUpdate(Request $request)
    {
        $whatsNew = $this->whatsNew;

        $whatsNew->title = $request->title;
        $whatsNew->content = $request->message;
        $whatsNew->button = $request->page;
        $whatsNew->active = 1;

        $whatsNew->save();

        return redirect('/admin')->with('updated', 'The Whats New Section was updated');
    }

    public function newAlert(Request $request)
    {
        $this->alert->where('active', 1)->update(['active' => 0]);

        $alert = $this->alert;
        $alert->alert = $request->alert;
        $alert->active = 1;

        $alert->save();

        return redirect('/admin')->with('alert-updated', 'The alert has been added');
    }

    public function removeAlert(Request $request)
    {
        $alert = $this->alert;
        $alert->id = $request->id;
        $alert->active = 0;

        $alert->save();

        return redirect('/admin')->with('alert-updated', 'The alert has been removed');
    }
}
