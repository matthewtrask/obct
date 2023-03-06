<?php
/**
 * Created by PhpStorm.
 * User: matthewtrask
 * Date: 5/24/16
 * Time: 8:59 PM
 */

namespace App\Http\Controllers\Obct;

use App\Cast;
use App\CurrentShow;
use App\Http\Controllers\Controller;

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
        $currentShow = $this->currentShow
            ->where('active', '1')
            ->get();

        $cast = $this->cast
            ->join('currentShow', function ($join) {
                $join->on('cast.show_id', '=', 'currentShow.id');
            })
            ->where('cast.active', '1')
            ->get();

        return view('obct.cast',
            [
                'showCast' => $cast,
                'currentShow' => $currentShow,
            ]
        );
    }
}
