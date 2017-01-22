<?php

namespace App\Http\Controllers\Admin;

use App\Performance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BoxOfficeController extends Controller
{
    const SEAT_TOTAL = 80;

    /**
     * @var Performance
     */
    private $performance;

    public function __construct(Performance $performance)
    {
        $this->performance = $performance;
    }

    public function index()
    {
        return view('admin.boxoffice');
    }

    public function fetchTransaction(Request $request)
    {

    }
}