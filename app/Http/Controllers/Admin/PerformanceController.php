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
     * @param Performance $performance
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
            ->orWhere('past', 1)
            ->get();

        return view('admin.performance',
            [
                'performances' => $performances
            ]
        );
    }

    public function addNewPerformance(Request $request)
    {
        $this->performance->where('active', 1)->update(['active' => 0, 'past' => 1]);

        $performance = $this->performance;
        $performance->title = $request->title;
        $performance->teaser = $request->teaser;
        $performance->description = $request->description;
        $performance->dates = $request->dates;
        $performance->price = $request->price;
        $performance->link = $request->link;
        $performance->cast_page = '/cast';
        $image = $request->file('image');

        if(!$image->isValid()){
            return "<p>No image was uploaded.</p>";
        }

        $data = file_get_contents($image);

        $performance->show_image = base64_encode($data);


        if(isset($request->active)){
            $performance->active = $request->active;
        } else {
            $performance->active = 0;
        }

        if(isset($request->upcoming)){
            $performance->upcoming = $request->upcoming;
        } else {
            $performance->upcoming = 0;
        }

        if(isset($request->auditions)){
            $performance->auditions = $request->auditions;
            $performance->upcoming = 1;
        } else {
            $performance->auditions = 0;
        }

        $performance->past = 0;

        $performance->save();
        return redirect('/admin/performances')->with('updated', 'Performance has been added!');

    }

    public function editPerformance(Request $request)
    {

    }

    public function archivePerformance(Request $request)
    {
        
    }
}