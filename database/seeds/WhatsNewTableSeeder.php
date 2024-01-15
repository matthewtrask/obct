<?php

use Illuminate\Database\Seeder;

class WhatsNewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('whatsNew')->insert([
                                                'title' => 'Class Registration',
                                                'content' => 'Class Registration is open for our spring session. Classes start on January 4 and each class will have several showcases.',
                                                'button' => 'classes'
                                            ]);
        DB::table('whatsNew')->insert([
                                                'title' => 'Apprentice Troupe',
                                                'content' => 'The Apprentice Troupe had a great run of Dear Edwina, Jr and  had sold out all performances in early November. They are working hard on finalizing their 15 minute cut of the show will compete against 110 groups from all over the country  at the Junior Theater Festival in Atlanta, Georgia on January 16-19th.',
                                                'button' => 'juniortroupe'
                                            ]);
        DB::table('whatsNew')->insert([
                                                'title' => 'Senior Troupe',
                                                'content' => 'The Senior Troupe is excited about their upcoming production of Beauty and the Beast  Jr. that opens on January 29,2016 and runs through February 7, 2016. Then its is on to the National Performing Arts Festival in Disney where they will compete with a selection of the show against groups from across the country.',
                                                'button' => 'troupe'
                                            ]);
        DB::table('whatsNew')->insert([
                                                'title' => 'New Summer Shows',
                                                'content' => 'OBCT is proud to announce that we have added three summer shows. Each performance is a great camp to hone those acting skills this summer and get on stage. Everyone has a place where we will help them shine. Learn from industry professionals the life skills theatre can teach all while making friends and memories that will last forever.',
                                                'button' => 'summer'
                                            ]);
        DB::table('whatsNew')->insert([
                                                'title' => 'Shrek Jr. Auditions',
                                                'content' => 'Off Broadway Children\'s Theatre is pleased to announce auditions for Shrek Jr. dates 5/18- 6:00-7:30- and on May 21- 2:00-5:00- show dates August 5-August 14. This audition is open to kids ages 8-17. Auditionees should prepare 30 seconds of a musical theatre selection to sing and be prepared to learn a short dance and cold read from the script.',
                                                'button' => 'auditions'
                                            ]);
        DB::table('whatsNew')->insert([
                                                'title' => 'Show Lineup!',
                                                'content' => 'We so much fun lined up with Willy Wonka Kids opening on March 11, 2016 and then Alice in Wonderland Jr, opening on on April 29, 2016. We have our 2016-2017 Junior Troupe  Auditions on May 14, 2016 from 2:00- 5:00.  and if that is not enough summer is coming and we have Shrek, Jr, Elf Jr, High School Musical Jr, Review and Aladdin Kids. So get ready for a wild ride at OBCT.',
                                                'button' => 'currentprod'
                                            ]);
    }
}
