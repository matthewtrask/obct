<?php

use Illuminate\Database\Seeder;

class HintsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hints')->insert([
            'hints' => 'Please have your child arrive 15 minutes prior to their audition time slot.'
                                  ]);
        DB::table('hints')->insert([
            'hints' => 'If you need to reschedule or cancel, please contact us as soon as possible. We do turn away actors once the time slots have been filled.'
                                  ]);
        DB::table('hints')->insert([
            'hints' => 'It is important that your child arrive in clothes suitable to dance in, hair pulled back, and wearing dance shoes or in bare feet.'
                                  ]);
        DB::table('hints')->insert([
            'hints' => 'Good behavior in the waiting room is just as important as it is in the audition room.'
                                  ]);
        DB::table('hints')->insert([
            'hints' => 'Auditionees must have musical accompaniment. Please have a CD or iPod with your audition song (karaoke-style, with no lead vocals), preferably cut to the part of the song where you will begin singing. Keep the selection between 30-45 seconds in length.'
                                  ]);
        DB::table('hints')->insert([
            'hints' => 'Auditions will last approximately 1 hour. Students are taken in groups of up to 15. They will sing individually for the casting directors (Director, Choreographer, Music Director, Assistant Director) then they will learn a short dance break.'
                                  ]);
        DB::table('hints')->insert([
            'hints' => 'After performing the dance, the Director will ask students to pair up and read various roles; mixing students up to see how they work with other actors. Not all students will be asked to read, but this doesn\'t mean you are not being considered for a role.'
                                  ]);
        DB::table('hints')->insert([
            'hints' => 'Cast list is typically posted within 5 days of auditions.'
                                  ]);
        DB::table('hints')->insert([
            'hints' => 'Audition Song Prep - $20. Our Audition Song prep service will help you pick the best part of a song to showcase in an audition. We will trim the song to a perfect audition cut. The tempo and key can also be altered. The song will be delivered to you via email'
                                  ]);
    }
}
