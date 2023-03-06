<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Summer;
use Illuminate\Http\Request;

class SummerController extends Controller
{
    public function index()
    {
        $summerShows = Summer::orderBy('active', 'DESC')->paginate(10);

        return view('admin.summer', ['summerShows' => $summerShows]);
    }

    public function create(Request $request)
    {
        $camp = new Summer();

        $camp->show_title = trim($request->show_title);
        $camp->ages = trim($request->ages);
        $camp->dates = trim($request->dates);
        $camp->time = trim($request->time);
        $camp->cost = trim($request->cost);
        $camp->show_dates = trim($request->show_dates);
        $camp->show_info = trim($request->show_info);
        $camp->show_link = trim($request->show_link);

        if ($request->file('image')) {
            if (! $request->file('image')->isValid()) {
                return '<p>No image was uploaded.</p>';
            }

            $data = file_get_contents($request->image);

            $camp->show_image = base64_encode($data);
        }

        $camp->active = $request->active ? $request->active : 0;

        $camp->save();

        return redirect('/admin/summer')->with('updated', 'Performance has been added!');
    }

    public function edit(Request $request)
    {
        $camp = Summer::findOrFail($request->id);

        $camp->show_title = trim($request->show_title);
        $camp->ages = trim($request->ages);
        $camp->dates = trim($request->dates);
        $camp->time = trim($request->time);
        $camp->cost = trim($request->cost);
        $camp->show_dates = trim($request->show_dates);
        $camp->show_info = trim($request->show_info);
        $camp->show_link = trim($request->show_link);

        if ($request->file('image')) {
            if (! $request->file('image')->isValid()) {
                return '<p>No image was uploaded.</p>';
            }

            $data = file_get_contents($request->image);

            $camp->show_image = base64_encode($data);
        }

        $camp->active = $request->active ? $request->active : 0;

        $camp->save();

        return redirect('/admin/summer')->with('updated', $camp->show_title.' has been updated!');
    }

    public function destroy(Request $request)
    {
        //
    }
}
