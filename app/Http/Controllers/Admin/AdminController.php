<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * @var User
     */
    private $user;

    /**
     * Create a new controller instance.
     *
     */
    public function __construct(User $user)
    {
        $this->middleware('auth');

        $this->user = $user;
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
}
