<?php
/**
 * Created by PhpStorm.
 * User: matthewtrask
 * Date: 5/14/16
 * Time: 6:36 PM
 */

namespace App\Http\Controllers\Users;


use App\Http\Controllers\Controller;
use App\User;
use App\Students;

class DashboardController extends Controller
{
    /**
     * @var User
     */
    private $user;

    /**
     * @var Students
     */
    private $student;

    public function __construct(User $user, Students $students)
    {
        $this->user = $user;
        $this->student = $students;
        
        
    }

    public function index($id)
    {
        $user = $this->user->findOrFail($id);

        $user_id = $id;

        $students = $this->student->find($user_id);


        return view('users.dashboard',
            [
                'name' => $user->name,
                'email' => $user->email,
                'student' => $students

            ]
        );
    }
}