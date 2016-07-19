<?php

namespace App\Http\Controllers\Admin;

use GuzzleHttp\Client;

use App\Classes;
use App\Http\Controllers\Controller;
use App\User;
use App\WhatsNew;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @var Client
     */
    private $client;

    /**
     * Create a new controller instance.
     *
     */
    public function __construct(User $user, WhatsNew $whatsNew, Classes $classes)
    {
        $this->middleware('auth');

        $this->user = $user;
        $this->whatsNew = $whatsNew;
        $this->classes = $classes;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = $this->classes->get();

        $classCount = count($classes);
        return view('admin.home', [
            'classes' => $classCount
        ]);
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
}
