<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\WhatsNew;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

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
     * Create a new controller instance.
     *
     */
    public function __construct(User $user, WhatsNew $whatsNew)
    {
        $this->middleware('auth');

        $this->user = $user;
        $this->whatsNew = $whatsNew;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;

        if (!$this->user->where('is_admin', 1)) {
            redirect('/login');
        }

        return view('admin.home');
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
