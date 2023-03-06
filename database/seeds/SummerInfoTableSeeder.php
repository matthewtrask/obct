<?php

use Illuminate\Database\Seeder;

class SummerInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('summerInfo')->insert([
            'details' => 'For veteran actors and newbies alike, these camps are an exciting way to spend the summer connecting with new friends and making great memories. They will spend each day learning music, dance and building characters as well as creating scenery, costumes and props. They will learn all facets of the show productions on stage and off. Auditions will be held on the first day of class. Please have them prepare a 30 second song to sing at the auditions.',
        ]);
    }
}
