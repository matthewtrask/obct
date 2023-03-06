<?php
/**
 * Created by PhpStorm.
 * User: matthewtrask
 * Date: 4/29/16
 * Time: 8:24 AM
 */

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Students;
use Illuminate\Support\Facades\Request;

class StudentController extends Controller
{
    /**
     * @var Students
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
        $student = Request::all(
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
