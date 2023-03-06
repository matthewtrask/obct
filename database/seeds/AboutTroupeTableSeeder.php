<?php

use Illuminate\Database\Seeder;

class AboutTroupeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aboutTroupe')->insert([
            'about' => 'Directed by Christian Mayer, "The OBCT Kids" is our award-winning musical theatre competition troupe designed for serious "triple threat" performers who live and breathe the theatre. Each year a small cast of performers, ranging in age from 10 - 15, are chosen to be members of the Troupe. After a lengthy audition process in mid August, the OBCT Kids rehearse their show an average of 5 hours a week over a 7 month period, in addition to polishing their acting, dance and vocal skills via weekly lessons.',
        ]);
        DB::table('aboutTroupe')->insert([
            'about' => 'Their hard work pays off in terms of a wonderful camaraderie among cast members, an exciting full production in our blackbox theatre, performances at local festivals and charity events, and the thrill of competing with other theatre and drama teams across the United States. Alumni of the 12 year program, can be found appearing as the top performers at Milton High School, West Forsyth High School, Pebblebrook Performing Arts High School, North Springs Performing Arts High School as well as many prestigious Theatre programs in Universities such as Emerson, Oklahoma University, Elon, Auburn, Cincinnati Conservatory and Pace as well as many others  throughout the United States. This troupe travels to The National Performing Arts Festival in Walt Disney World each year to compete against theatres from around the nation.',
        ]);
        DB::table('aboutTroupe')->insert([
            'about' => 'In 2015, we will debut our Off Broadway Kids Apprentice Company for ages 6-11 which is an opportunity for younger performers to gain the knowledge and skills needed to be in the main troupe. This company will compete at the Junior Theatre Festival in Atlanta in January 2016.',
        ]);
    }
}
