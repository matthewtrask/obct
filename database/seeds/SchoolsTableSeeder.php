<?php

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->insert([
            'school' => 'Sweet Apple Elementary',
            'location' => 'Roswell',
            'details' => 'Off Broadway Children\'s Theater has been connecting with SAE for the last 5 years and have produced <b>Schoolhouse Rock Live, Jr</b>, <b>Annie Kids</b>, <b>Winnie the Pooh Kids</b>, <b>Willy Wonka Kids</b> and <b>Jungle Book Kids</b>.',
        ]);
        DB::table('schools')->insert([
            'school' => 'Cherokee Charter Academy',
            'location' => 'Canton',
            'details' => 'Off Broadway Children\'s Theater started connecting with CCA in 2014 and the program has been flourishing ever since. The inaugural show - <b>101 Dalmatians Kids</b> was a huge success in December of 2014 and the follow up show <b>Aladdin Kids</b> in April of 2015 saw participation double. OBCT and CCA are looking forward to establishing CCA as the premier performing arts Charter School in Georgia.',
        ]);
    }
}
