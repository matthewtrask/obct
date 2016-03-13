<?php

use Illuminate\Database\Seeder;

class JrTroupeAboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jrTroupeAbout')->insert([
            'about' => 'Directed by Christian Mayer, "The OBCT Apprentice Troupe is our  musical theatre competition troupe designed for serious "triple threat" performers who live and breathe the theatre while remaining true to who they are and building character. Each year a small cast of performers, ranging in age from 8-12, are chosen to be members of the Troupe. After a lengthy audition process in mid May, the OBCT Troupe rehearse their show an average of 5 hours a week over a 7 month period, in addition to polishing their acting, dance and vocal skills via weekly lessons and participating in community service projects to give back to the community.'
                                           ]);
        DB::table('jrTroupeAbout')->insert([
            'about' => 'Their hard work pays off in terms of a wonderful camaraderie among cast members, an exciting full production in our blackbox theatre, performances at local festivals and charity events, and the thrill of competing with other theatre and drama teams across the United States. Alumni of our programs, can be found appearing as the top performers at Milton High School, West Forsyth High School, Pebblebrook Performing Arts High School, North Springs Performing Arts High School as well as many prestigious Theatre programs in Universities such as Emerson, Oklahoma University, Elon, Auburn, Cincinnati Conservatory and Pace as well as many others throughout the United States. This troupe competes at the Junior Theatre Festival in Atlanta each year to compete against theatres from around the nation.'
                                           ]);
        DB::table('jrTroupeAbout')->insert([
            'about' => 'Please see the Senior Troupe page for more information.'
                                           ]);
    }
}
