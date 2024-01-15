<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'first_name' => str_random(6),
            'last_name' => str_random(10),
            'age' => 13,
            'phone' => 1231231233,
            'grade' => 7,
            'school' => str_random(10),
            'address' => str_random(16),
            'city' => 'Roswell',
            'state' => 'GA',
            'zip_code' => 30303,
            'emergency_contact' => str_random(16),
            'relationship' => 'mother',
            'emergency_phone' => 1231231231,
            'medical_info' => str_random(16),
            'classes' => 'Class, Class, Class',
            'current_role' => 'none',
            'current_show' => 'none',
        ]);
    }
}
