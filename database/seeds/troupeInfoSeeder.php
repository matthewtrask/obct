<?php

use Illuminate\Database\Seeder;

class troupeInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('troupeInfo')->insert(
            [
                'title' => 'Who',
                'point' => 'OBCT Junior Theater Troupe 2016-2017'
            ]
        );
        DB::table('troupeInfo')->insert(
            [
                'title' => 'What',
                'point' => 'A group of 25-30 performers selected by audition for ages of 7-12 that are dedicated and want to take their theater experience to the next level.'
            ]
        );
        DB::table('troupeInfo')->insert(
            [
                'title' => 'When',
                'point' => 'The Off Broadway Children\'s Theater in Alpharetta, Georgia'
            ]
        );
        DB::table('troupeInfo')->insert(
            [
                'title' => 'Where',
                'point' => 'They will audition on May 14, 2016 from 2:00-5:00. They should be prepared to sing 30 seconds of a song with accompaniment and be ready to dance and read from the script.They will be required to take 1 hour Dance Class/ 1  Hour Improv/Acting class/ and rehearse the show for 1 hour each Saturday from August to February. They will rehearse a Broadway Jr. show that will be determined and be performed in November  2016. They will attend and compete with a 15 minute selection of the show at the 2017 Junior Theater Festival in Atlanta'
            ]
        );
        DB::table('troupeInfo')->insert(
            [
                'title' => 'Why',
                'point' => 'The Off Broadway Children\'s Theater Troupe has thrived since 2002. These young people will then progress into the OBCT Senior Troupe. The program has produced the top performing students in Georgia that have been multiple Shuler Hensley/Thescon award winners. They have gone on to college at Michigan/Oklahoma University/Emerson/Pace/Elon/Cincinnati Conservatory /Carnegie Mellon.'
            ]
        );
        DB::table('troupeInfo')->insert(
            [
                'title' => 'How',
                'point' => 'The audition date is May 14, 2016 from 2:00-5:00 PM and callbacks will be May 15, 2016 from 2:00-4:00. Audition slots can be booked by emailing Offbroadway@msn.com  or calling 770-664-2410. The cost of the troupe is $375.00 and the monthly cost for the instruction is $90.00 per month. The cost of JTF is separate and runs approximately $250.00 per person. The troupe number is limited. '
            ]
        );
    }
}
