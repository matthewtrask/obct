<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Schools;

class SchoolsController extends Controller
{
    private $schools;

    public function __construct(Schools $schools)
    {
        $this->schools = $schools;
    }

    public function index()
    {
        $schools = $this->schools->all();

        return view('admin.schools',
            [
            'schools' => $schools
            ]
        );
    }

    public function add(Request $request)
    {
        $school = $this->schools;

        $school->school = $request->school;
        $school->location = $request->location;
        $school->details = $request->details;

        $school->save();

        return redirect('/admin/schools')->with('updated', 'School has been added!');



    }

    public function edit($school_id)
    {

    }

    public function delete($school_id)
    {
        $this->schools->destroy($school_id);

        return redirect('/admin/schools')->with('updated', 'School has been deleted!');

    }
}