<?php
/**
 * Created by PhpStorm.
 * User: matthewtrask
 * Date: 4/29/16
 * Time: 8:24 AM
 */

namespace App\Http\Controllers\Users;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Students;


class StudentController extends Controller
{
    /**
     * @var Students $students
     */
    private $students;

    public function __construct(Students $students)
    {
        $this->students = $students;
    }

    public function registerStudent()
    {
        return view('users.register');
    }

    public function addStudent()
    {
        $student = Input::all(
            'first_name',
            'last_name',
            'age',
            'phone',
            'grade',
            'school',
            'address',
            'apt',
            'city',
            'state',
            'zip',
            'emergency_contact',
            'relationship',
            'emergency_phone',
            'medical_info'
        );

        var_dump($student);
    }
}
