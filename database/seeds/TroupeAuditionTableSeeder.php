<?php

use Illuminate\Database\Seeder;

class TroupeAuditionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('TroupeAudition')->insert(
            [
                'title' => 'OBCT Troupe Auditions',
                'dates' => 'August 20, 2016',
                'times' => '2:00-5:00 PM',
                'callbacks' => 'August 24, 2016',
                'callback_times' => '6:00-9:00 PM',
                'info' => 'Audition slots can be booked by emailing Offbroadway@msn.com or calling 770-664-2410/',
            ]
        );
    }
}
