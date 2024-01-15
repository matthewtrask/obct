<?php

use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('about')->insert([
           'content' => 'Back in 2000, Chris and Shannon Mayer had a desire to open up a performing arts center that was focused on celebrating the unique personalities of kids. We envisioned a place where kids felt confident and could be themselves and share their love for the arts. We wanted to create an environment that was so irresistable, kids could not imagine being any place else. With an array of classes in Musical Theatre, Acting and dance classes that support our theatre curriculum, we help kids ages 4-18 discover their passion for the performing arts.'
                                  ]);
        DB::table('about')->insert([
           'content' => 'In addition, we have a fully operational children\'s theatre which produces 7 professional theatrical productions a year by kids forkids in our 90 seat black box theatre . Our facility features a flexible 90 seat black box theatre with professional stage lighting, and 1200 square foot rehearsal hall, a private music studio and a costume department. We would love for you to stop by, come see a show and come see the environment we have built for kids . Welcome home .'
                                  ]);
    }
}
