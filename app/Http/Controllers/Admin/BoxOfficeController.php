<?php
/**
 * Created by PhpStorm.
 * User: trask
 * Date: 11/13/16
 * Time: 9:38 PM
 */

namespace App\Http\Controllers\Admin;


use App\Performance;

class BoxOfficeController
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
        $attendence_list = $this->performance->findOrFail();

        return view('admin.boxoffice',[
            'attendence_list' => $attendence_list
        ]);
    }

    public function fetchTransaction()
    {

    }
}