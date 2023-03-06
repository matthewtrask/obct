<?php

use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Db::table('classes')->insert([
            'class_name' => 'Beginning Improv/Acting',
            'teaser' => 'Mr. Chris will help your young performer connect with their inner passion for storytelling.',
            'description' => 'Mr. Chris will help your young performer connect with their inner passion for storytelling. Each class is high energy, non stop fun exploring the basics of acting and Improv. We will create spontaneous scenes with unique characters that are humorous and memorable. We challenge the young performer to use their imagination, think outside the box and help establish the who -what- where- when and why of the scene. We will touch on the terminology of stage, work on scenes from plays and understand text of what the playwright is trying to convey. They will grow in confidence and have a greater understanding of themselves and connect with the other performers in the class.We will have periodic showcases through the year to showcase their growth and passion.',
            'ages' => '8-12',
            'day' => 'Monday',
            'time' => '5:00-6:00 PM',
            'price' => '$55.00',
            'link' => 'https://app.jackrabbitclass.com/reg.asp?id=277946',
        ]);
        Db::table('classes')->insert([
            'class_name' => 'Musical Theatre Dance',
            'teaser' => 'Come join Erin Greenway as she inspires you to connect to the basics of Musical Theater Dance. ',
            'description' => 'Come join Erin Greenway as she inspires you to connect to the basics of Musical Theater Dance. We will build on the core basics of dance combinations, and required technique that will help to prepare you for auditions and feel comfortable when learning dance routines for shows. We will focus on classic shows like Guys and Dolls, Mary Poppins, as well as today?s shows like Hairspray, Shrek, Newsies and Aladdin and many more.',
            'ages' => '8-16',
            'day' => 'Monday',
            'time' => '6:00-7:00 PM',
            'price' => '$55.00',
            'link' => 'https://app.jackrabbitclass.com/reg.asp?id=277946',
        ]);
        Db::table('classes')->insert([
            'class_name' => 'Junior Musical Theatre ',
            'teaser' => 'Come take a journey with Ms. Shannon and her infectious teaching style as she helps your young performer connect with the song to tell the story.',
            'description' => 'Come take a journey with Ms. Shannon and her infectious teaching style as she helps your young performer connect with the song to tell the story. This is a great way for the young performer to get the basics of all the elements of what Musical Theater is: song- dance and acting. We will attack stage basics, auditions, building a character that conveys a story through song and working as an ensemble to bring those moments to life. We will cover selections from Annie, Peter Pan, Seussical, Honk and many more to help keep the class fresh and challenging. We will have periodic showcases through the year to showcase their growth and passion.',
            'ages' => '5-7',
            'day' => 'Tuesday',
            'time' => '5:00-6:00 PM',
            'price' => '$55.00',
            'link' => 'https://app.jackrabbitclass.com/reg.asp?id=277946',
        ]);
        Db::table('classes')->insert([
            'class_name' => 'Intro to Musical Theatre ',
            'teaser' => 'Come take a journey with Ms. Shannon and her infectious teaching style as she helps your young performer connect with the song to tell the story.',
            'description' => 'Come take a journey with Ms. Shannon and her infectious teaching style as she helps your young performer connect with the song to tell the story. This is a great way for the young performer to get the basics of all the elements of what Musical Theater is: song- dance and acting. We will attack stage basics, auditions, building a character that conveys a story through song and working as an ensemble to bring those moments to life. We will cover selections from Annie, Peter Pan, Seussical, Honk and many more to help keep the class fresh and challenging. We will have periodic showcases through the year to showcase their growth and passion.',
            'ages' => '7-9',
            'day' => 'Thursday',
            'time' => '5:00-6:00 PM',
            'price' => '$55.00',
            'link' => 'https://app.jackrabbitclass.com/reg.asp?id=277946',
        ]);
        Db::table('classes')->insert([
            'class_name' => 'Advanced Acting',
            'teaser' => 'This class will connect the serious actor to challenge themselves and reach inside to convey the story though the honesty of the character.',
            'description' => 'This class will connect the serious actor to challenge themselves and reach inside to convey the story though the honesty of the character. We will use scene study- monologues- based on Stanislavski method acting and explore the 5 W?s and the obstacle and resolution of the character. We will also use improv games to stretch the actor to break down walls and place them in vulnerable situations. We will have guest instructors and outside excursions to round out the program. We will have multiple showcases to allow the performer to perfect their craft. This class will help those students wishing to work with OBCT troupe and ultimately in their high school theater programs.',
            'ages' => '10-16',
            'day' => 'Thursday',
            'time' => '6:00-7:30 PM',
            'price' => '$55.00',
            'link' => 'https://app.jackrabbitclass.com/reg.asp?id=277946',
        ]);
        Db::table('classes')->insert([
            'class_name' => 'Advanced Musical Theatre',
            'teaser' => 'Ms. Shannon will challenge your performer to become a musical theater triple threat. ',
            'description' => 'Ms. Shannon will challenge your performer to become a musical theater triple threat. We will use selections from broadway shows such as Godspell, Seussical, Aladdin, Little Mermaid and more to hone their skills and work on the finer points of telling the story. She will break down the components of dance and song and acting and challenge the performer to connect with the character and each other in this challenging and intense class. This class will help those students wishing to work with OBCT troupe and ultimately in their high school theater programs. Mr Chris will guest instruct to give the students his critique and insight.',
            'ages' => '10-16',
            'day' => 'Thursday',
            'time' => '6:00-7:00 PM',
            'price' => '$55.00',
            'link' => 'https://app.jackrabbitclass.com/reg.asp?id=277946',
        ]);
        Db::table('classes')->insert([
            'class_name' => 'OBCT Apprentice Company',
            'teaser' => 'Please contact the studio for more details about our Apprentice Company.',
            'description' => 'Please contact the studio for more details about our Apprentice Company.',
            'ages' => '5-12 ',
            'day' => 'Saturday',
            'time' => '9:00-12:00 PM',
            'price' => '$90.00',
            'link' => '',
        ]);
        Db::table('classes')->insert([
            'class_name' => 'OBCT Troupe',
            'teaser' => 'Please contact the studio for more details about our Apprentice Company.',
            'description' => 'Please contact the studio for more details about our Apprentice Company.',
            'ages' => '8-15',
            'day' => 'Saturday',
            'time' => '11:00-5:00 PM',
            'price' => '$110.00',
            'link' => '',
        ]);
    }
}
