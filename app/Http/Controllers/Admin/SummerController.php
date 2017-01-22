<?php

namespace App\Http\Controllers\Admin;

use App\Summer;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SummerController extends Controller
{
    public function index()
    {
        $summerShows = Summer::orderBy('dates')->paginate(10);

        return view('admin.summer', ['summerShows' => $summerShows]);
    }

    public function create(Request $request)
    {
        $camp = new Summer();

        $camp->show_title = trim($request->show_title);
        $camp->ages = $request->ages;
        $camp->dates = $request->dates;
        $camp->time = $request->time;
        $camp->cost = $request->cost;
        $camp->show_dates = $request->show_dates;
        $camp->show_info = $request->show_description;

        if ($request->file('image')) {
            if(!$request->file('image')->isValid()){
                return "<p>No image was uploaded.</p>";
            }

            $data = file_get_contents($request->image);

            $camp->show_image = base64_encode($data);
        }

        $camp->active = $request->active;

        $camp->save();

        return redirect('/admin/summer')->with('updated', 'Performance has been added!');
    }

    public function edit(Request $request)
    {
        //
    }

    public function destroy(Request $request)
    {
        //
    }
}
