<?php

use Illuminate\Database\Seeder;

class FaqTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faq')->insert([
            'question' => 'Are actors paid?',
            'answer' => 'Adult actors are compensated on a stipend basis. Youth actors are not compensated, but gain valuable stage experience performing in a professional production alongside adult working actors',
        ]);
        DB::table('faq')->insert([
            'question' => 'Do I need to memorize a monologue?',
            'answer' => 'Sometimes, but not always. After you sing (if the production is a musical) you may be given a copy of a scene from the play that you will be asked to read from. This is called a cold reading.',
        ]);
        DB::table('faq')->insert([
            'question' => 'What is 16 bars of sheet music?',
            'answer' => 'If you look at a piece of sheet music, you will see that the notes are on a series of 5 horizontal lines. You will also see vertical lines that separate those lines into a series of groups of notes. Each one of those vertical sections is a "bar" of music.',
        ]);
        DB::table('faq')->insert([
            'question' => 'Do I need a headshot (picture) and a resume?',
            'answer' => 'When you arrive you will be given an audition form to fill out. If you have a resume we will attach it to the form. If you do not have a resume you will need to fill out the space on the audition form that asks you to list any theatrical experience.',
        ]);
        DB::table('faq')->insert([
            'question' => 'Can my parents watch my audition?',
            'answer' => 'No. Parents are welcome to accompany you before and after the audition. There will be a place for them to wait while you are in your audition.',
        ]);
        DB::table('faq')->insert([
            'question' => 'What happens if I cannot make the audition dates?',
            'answer' => 'You may arrange a video submission.',
        ]);
        DB::table('faq')->insert([
            'question' => 'What should I wear?',
            'answer' => 'An audition is much like a job interview, except in this interview you might be asked to dance or sing! You should try to look professional and bring an extra set of more comfortable clothes and shoes if you know there will be a choreography portion of the audition',
        ]);
        DB::table('faq')->insert([
            'question' => 'Will I have to audition in front of anyone else who is auditioning?',
            'answer' => 'Sometimes, yes. If asked to do a cold reading, you may be asked to read with other people for the scene.',
        ]);
        DB::table('faq')->insert([
            'question' => 'What is a callback?',
            'answer' => 'The "callback" is a second (sometimes third, fourth or fifth) audition where the selection process becomes more specific. At a callback you will be asked to read additional scenes from the show, prepare music from the score, and learn additional dance routines',
        ]);
        DB::table('faq')->insert([
            'question' => 'What if I am not called back?',
            'answer' => 'Not being called back doesn\'t always mean that you aren\'t being cast in the show. Sometimes a callback is needed for a director to look at the way specific groups of people fit together.',
        ]);
        DB::table('faq')->insert([
            'question' => 'What if I can\'t make all rehearsals?',
            'answer' => 'A calendar with all the possible rehearsal dates and all performances is located on the back of the Audition Form. When you audition we ask that you mark any date that you can\'t rehearse and turn it back in with your form. We are often able to work around scheduling conflicts',
        ]);
        DB::table('faq')->insert([
            'question' => 'How will I know if I am cast in the show?',
            'answer' => 'If you are cast in the show you will receive a email no later than two weeks after the audition.',
        ]);
    }
}
