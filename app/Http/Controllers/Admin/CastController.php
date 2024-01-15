<?php
/**
 * Created by PhpStorm.
 * User: matthewtrask
 * Date: 6/4/16
 * Time: 8:01 PM
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Cast;
use App\CurrentShow;
use Illuminate\Support\Facades\Input;

class CastController extends Controller
{
    /**
     * @var Cast
     */
    private $cast;

    /**
     * @var CurrentShow
     */
    private $currentShow;

    public function __construct(Cast $cast, CurrentShow $currentShow)
    {
        $this->cast = $cast;
        $this->currentShow = $currentShow;
    }

    public function cast()
    {
        $show = $this->currentShow->where('active', '1')->get();

        $cast = $this->cast
            ->join('currentShow', function($join){
                $join->on('cast.show_id', '=', 'currentShow.id');
            })
            ->where('cast.active', '1')
            ->simplePaginate(10);

        $cast->setPath('?page=next');

        return view('admin.cast',
            [
                'shows' => $show,
                'casts' => $cast
            ]
        );
    }

    public function addCast()
    {
        $data = Input::all();

        Cast::create([
            'show_id' => $data['show_id'],
            'student' => $data['student'],
            'cast' => $data['cast'],
            'active' => 1,
            'role' => $data['role']
        ]);

        return redirect('/admin/cast')->with('status', 'Student added to cast!');
    }

    public function editCast()
    {
        $data = Input::all();

        $id = $data['cast_id'];
        $show_id = $data['show_id'];
        $student = $data['student'];
        $role = $data['role'];
        $cast = $data['cast'];

        $this->cast->where('active', $id)
                ->update(
                    [
                        'student' => $student,
                        'show_id' => $show_id,
                        'role' => $role,
                        'cast' => $cast
                    ]
                );

        return redirect('/admin/cast')->with('updated', 'The cast was edited!');
    }

    public function removeCast()
    {

    }


}