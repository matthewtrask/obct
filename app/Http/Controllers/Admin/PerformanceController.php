<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Performance;
use Illuminate\Http\Request;
use App\CurrentShow;
use App\Upcoming;

class PerformanceController extends Controller
{
    /**
     * @var Performance
     */
    private $performance;

    /**
     * PerformanceController constructor.
     * @param Upcoming $upcoming
     * @param CurrentShow $currentShow
     */
    public function __construct(Performance $performance)
    {
        $this->performance = $performance;
    }

    public function index()
    {
        $performances = $this->performance
            ->where('active', 1)
            ->orWhere('upcoming', 1)
            ->orWhere('auditions', 1)
            ->get();

        return view('admin.performance',
            [
                'performances' => $performances
            ]
        );
    }

    public function addNewPerformance(Request $request)
    {
        $newPerformance = $this->performance;
    }

    public function editPerformance(Request $request)
    {

    }

    public function archivePerformance(Request $request)
    {

    }
}