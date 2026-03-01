<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Show;
use App\Models\Classes;
use App\Models\Teacher;
use App\Models\Announcement;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Models\Page;
use App\Models\Troupe;
use App\Models\Gallery;
use Illuminate\Support\Facades\DB;

class TestDataSeeder extends Seeder
{
    public function run(): void
    {
        // Disable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Clear existing data
        Show::truncate();
        Classes::truncate();
        Teacher::truncate();
        Announcement::truncate();
        Testimonial::truncate();
        Faq::truncate();
        Page::truncate();
        Troupe::truncate();
        Gallery::truncate();

        // Re-enable foreign key checks
        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Create Shows
        Show::create([
            'title' => 'The Little Mermaid Jr.',
            'description' => 'Journey "under the sea" with Ariel and her aquatic friends in Disney\'s The Little Mermaid JR., adapted from the Broadway production and the beloved animated film. Based on the Hans Christian Andersen fairy tale and the beloved Disney film, this stage version includes all of the wonderful songs from the animated classic, plus some new songs.',
            'status' => 'current',
            'ticket_price' => 12.00,
            'ticket_url' => 'https://example.com/tickets/little-mermaid',
            'start_date' => now()->addDays(5),
            'end_date' => now()->addDays(12),
            'audition_date' => now()->subDays(30),
            'audition_info' => 'Auditions were held in January. Stay tuned for our next production!',
            'performance_times' => ['Friday 7:00 PM', 'Saturday 2:00 PM', 'Saturday 7:00 PM', 'Sunday 2:00 PM'],
        ]);

        Show::create([
            'title' => 'Frozen Jr.',
            'description' => 'Love is an open door in Disney\'s Frozen JR. Based on the 2018 Broadway musical and brought to life by your favorite characters from the 2013 film, Frozen JR. features all of the magical moments you love plus expanded musical numbers and stunning visual magic.',
            'status' => 'upcoming',
            'ticket_price' => 12.00,
            'start_date' => now()->addDays(60),
            'end_date' => now()->addDays(67),
            'audition_date' => now()->addDays(14),
            'audition_info' => 'Open auditions for ages 8-18. Please prepare 30 seconds of a song from a Disney musical.',
            'performance_times' => ['Friday 7:00 PM', 'Saturday 2:00 PM', 'Saturday 7:00 PM'],
        ]);

        Show::create([
            'title' => 'Matilda Jr.',
            'description' => 'Matilda has astonishing wit, intelligence and psychokinetic powers. She\'s unloved by her cruel parents but impresses her schoolteacher, the highly loveable Miss Honey. Matilda\'s school life isn\'t completely smooth sailing, however – the school\'s mean headmistress, Miss Trunchbull, hates children and just loves thinking up new punishments for those who don\'t abide by her rules.',
            'status' => 'past',
            'start_date' => now()->subDays(90),
            'end_date' => now()->subDays(83),
            'performance_times' => ['Friday 7:00 PM', 'Saturday 2:00 PM', 'Sunday 2:00 PM'],
        ]);

        // Create Teachers
        Teacher::create([
            'name' => 'Sarah Johnson',
            'bio' => 'Sarah has been teaching theater to young performers for over 15 years. She holds a BFA in Musical Theater from NYU and has performed in regional theaters across the country. Her passion is helping students discover their confidence through the performing arts.',
            'specialties' => 'Musical Theater, Voice, Acting',
            'active' => true,
            'order' => 1,
        ]);

        Teacher::create([
            'name' => 'Michael Chen',
            'bio' => 'Michael brings 10 years of professional dance experience to OBCT. Trained in ballet, jazz, and contemporary dance, he specializes in choreography for young performers. He believes that every child can shine on stage with the right encouragement and training.',
            'specialties' => 'Dance, Choreography, Movement',
            'active' => true,
            'order' => 2,
        ]);

        Teacher::create([
            'name' => 'Emily Rodriguez',
            'bio' => 'Emily is a certified drama teacher with a Master\'s in Theater Education. She has directed over 30 youth productions and loves creating a safe, supportive environment where students can explore their creativity and develop their stage presence.',
            'specialties' => 'Directing, Improvisation, Stage Combat',
            'active' => true,
            'order' => 3,
        ]);

        // Create Classes
        Classes::create([
            'name' => 'Broadway Babies',
            'description' => 'Our youngest performers (ages 4-6) explore the basics of theater through games, songs, and storytelling. This class builds confidence, creativity, and social skills in a fun, nurturing environment.',
            'age_range' => '4-6',
            'schedule' => 'Saturdays 10:00 AM - 11:00 AM',
            'session_type' => 'year-round',
            'price' => 150.00,
            'start_date' => now()->startOfMonth(),
            'end_date' => now()->endOfMonth()->addMonths(2),
            'capacity' => 12,
            'active' => true,
            'order' => 1,
        ]);

        Classes::create([
            'name' => 'Musical Theater Workshop',
            'description' => 'Students learn acting, singing, and dancing while working on scenes from popular Broadway musicals. This comprehensive class helps develop performance skills and stage presence.',
            'age_range' => '7-12',
            'schedule' => 'Wednesdays 5:00 PM - 6:30 PM',
            'session_type' => 'year-round',
            'price' => 200.00,
            'start_date' => now()->startOfMonth(),
            'end_date' => now()->endOfMonth()->addMonths(2),
            'capacity' => 16,
            'active' => true,
            'order' => 2,
        ]);

        Classes::create([
            'name' => 'Teen Acting Intensive',
            'description' => 'Advanced acting techniques for serious young performers. Students work on monologues, scene study, and audition techniques. Perfect preparation for high school drama programs and beyond.',
            'age_range' => '13-18',
            'schedule' => 'Thursdays 6:00 PM - 8:00 PM',
            'session_type' => 'year-round',
            'price' => 225.00,
            'start_date' => now()->startOfMonth(),
            'end_date' => now()->endOfMonth()->addMonths(2),
            'capacity' => 14,
            'active' => true,
            'order' => 3,
        ]);

        Classes::create([
            'name' => 'Summer Musical Theater Camp',
            'description' => 'Week-long intensive program where students learn, rehearse, and perform a full musical production. Includes acting, singing, dancing, and stagecraft. Performance on Friday for family and friends!',
            'age_range' => '8-14',
            'schedule' => 'Monday-Friday 9:00 AM - 3:00 PM',
            'session_type' => 'summer',
            'price' => 350.00,
            'start_date' => now()->month(6)->startOfMonth(),
            'end_date' => now()->month(6)->startOfMonth()->addDays(4),
            'capacity' => 24,
            'active' => true,
            'order' => 4,
        ]);

        Classes::create([
            'name' => 'Voice & Performance',
            'description' => 'Develop vocal technique, breath control, and performance skills. Students work on solo and group numbers from musical theater repertoire. All skill levels welcome!',
            'age_range' => '9-16',
            'schedule' => 'Tuesdays 5:30 PM - 6:45 PM',
            'session_type' => 'year-round',
            'price' => 180.00,
            'start_date' => now()->startOfMonth(),
            'end_date' => now()->endOfMonth()->addMonths(2),
            'capacity' => 10,
            'active' => true,
            'order' => 5,
        ]);

        Classes::create([
            'name' => 'Dance for Theater',
            'description' => 'Learn jazz, ballet, and contemporary dance styles used in musical theater. Students develop coordination, rhythm, and stage presence through fun, high-energy choreography.',
            'age_range' => '7-13',
            'schedule' => 'Saturdays 11:30 AM - 12:30 PM',
            'session_type' => 'year-round',
            'price' => 165.00,
            'start_date' => now()->startOfMonth(),
            'end_date' => now()->endOfMonth()->addMonths(2),
            'capacity' => 15,
            'active' => true,
            'order' => 6,
        ]);

        // Create Announcements
        Announcement::create([
            'type' => 'alert',
            'title' => 'Snow Day',
            'content' => 'All classes scheduled for today are cancelled due to inclement weather. We will resume regular schedule tomorrow.',
            'active' => true,
            'expires_at' => now()->addDays(1),
        ]);

        Announcement::create([
            'type' => 'news',
            'title' => 'New Summer Camp Dates Announced',
            'content' => 'Registration is now open for our summer musical theater camps! We have three one-week sessions in June and July. Spaces fill quickly, so register early!',
            'link_url' => '/classes',
            'link_text' => 'View Summer Programs',
            'active' => true,
            'expires_at' => now()->addMonths(3),
        ]);

        Announcement::create([
            'type' => 'news',
            'title' => 'Frozen Jr. Auditions Coming Soon',
            'content' => 'Mark your calendars! Open auditions for Frozen Jr. will be held on March 15th. All roles are open to performers ages 8-18. No experience necessary!',
            'link_url' => '/shows',
            'link_text' => 'Learn More',
            'active' => true,
            'expires_at' => now()->addMonths(2),
        ]);

        Announcement::create([
            'type' => 'news',
            'title' => 'Spring Showcase Success',
            'content' => 'Thank you to everyone who attended our Spring Showcase! Our students did an amazing job showcasing their talents. Check out photos in our gallery!',
            'link_url' => '/galleries',
            'link_text' => 'View Photos',
            'active' => true,
            'expires_at' => now()->addMonth(),
        ]);

        // Create Testimonials
        Testimonial::create([
            'author_name' => 'Jennifer Martinez',
            'author_role' => 'Parent',
            'content' => 'OBCT has been incredible for my daughter! She was shy when she started, but now she confidently performs in front of hundreds of people. The teachers truly care about each child\'s growth.',
            'featured' => true,
            'active' => true,
            'order' => 1,
        ]);

        Testimonial::create([
            'author_name' => 'David Thompson',
            'author_role' => 'Parent',
            'content' => 'My son has been taking classes here for three years and loves every minute. The productions are professional quality, and the skills he\'s learning extend far beyond the stage.',
            'featured' => true,
            'active' => true,
            'order' => 2,
        ]);

        Testimonial::create([
            'author_name' => 'Amanda Lee',
            'author_role' => 'Parent',
            'content' => 'We tried several theater programs before finding OBCT, and this is by far the best. The staff is professional, caring, and talented. My kids ask every day if it\'s class day!',
            'featured' => true,
            'active' => true,
            'order' => 3,
        ]);

        // Create FAQs
        Faq::create([
            'category' => 'General',
            'question' => 'What age groups do you serve?',
            'answer' => 'We offer programs for ages 4-18, with classes grouped by age and skill level to ensure the best experience for each student.',
            'active' => true,
            'order' => 1,
        ]);

        Faq::create([
            'category' => 'General',
            'question' => 'Do I need experience to join?',
            'answer' => 'Not at all! We welcome students of all experience levels, from complete beginners to seasoned performers. Our teachers work with each student at their own pace.',
            'active' => true,
            'order' => 2,
        ]);

        Faq::create([
            'category' => 'Registration',
            'question' => 'How do I register for classes?',
            'answer' => 'You can register by calling us at 770-664-2410 or emailing offbroadway@msn.com. We\'ll help you find the perfect class for your child!',
            'active' => true,
            'order' => 3,
        ]);

        Faq::create([
            'category' => 'Registration',
            'question' => 'What is your refund policy?',
            'answer' => 'We offer a full refund if you withdraw within the first week of class. After that, we can offer a prorated refund or class credit for future sessions.',
            'active' => true,
            'order' => 4,
        ]);

        Faq::create([
            'category' => 'Classes',
            'question' => 'What should my child wear to class?',
            'answer' => 'Comfortable clothing that allows for movement. For dance classes, we recommend leggings or shorts and a fitted top. Athletic shoes or dance shoes work best.',
            'active' => true,
            'order' => 5,
        ]);

        Faq::create([
            'category' => 'Classes',
            'question' => 'How long are your class sessions?',
            'answer' => 'Most year-round classes run for 8-12 weeks. Summer camps are one week intensive programs. Specific dates are listed with each class description.',
            'active' => true,
            'order' => 6,
        ]);

        Faq::create([
            'category' => 'Shows',
            'question' => 'How are cast members selected?',
            'answer' => 'We hold open auditions for all shows. Casting decisions are based on audition performance, age appropriateness, and overall ensemble balance. We strive to give every student a meaningful role.',
            'active' => true,
            'order' => 7,
        ]);

        Faq::create([
            'category' => 'Shows',
            'question' => 'What is the time commitment for a show?',
            'answer' => 'Rehearsals typically run 6-8 weeks, meeting 2-3 times per week. Tech week (the week before opening) requires additional rehearsal time. Full schedules are provided at the first rehearsal.',
            'active' => true,
            'order' => 8,
        ]);

        // Create Troupes
        Troupe::create([
            'name' => 'OBCT Senior Troupe',
            'type' => 'senior',
            'description' => 'Our advanced performance troupe for experienced students ages 13-18. Members participate in multiple productions per year and develop leadership skills by mentoring younger students.',
            'requirements' => 'Audition required. Students must have completed at least one year of classes at OBCT or demonstrate equivalent experience.',
            'active' => true,
        ]);

        Troupe::create([
            'name' => 'OBCT Junior Troupe',
            'type' => 'junior',
            'description' => 'A performance ensemble for students ages 8-12 who are ready for more intensive training. Junior Troupe members perform at community events and develop advanced theater skills.',
            'requirements' => 'Audition or teacher recommendation required. Students should have at least 6 months of theater experience.',
            'active' => true,
        ]);

        // Create About Page
        Page::create([
            'slug' => 'about',
            'title' => 'About OBCT',
            'content' => 'Off Broadway Children\'s Theatre (OBCT) has been a cornerstone of performing arts education in the Atlanta area since 2000. Founded with the mission to provide high-quality theater education and performance opportunities for young people, we have grown from a small acting class to a thriving community theater serving hundreds of students each year.

Our Philosophy
We believe that every child has the potential to shine on stage. Through our comprehensive programs, we help students develop confidence, creativity, and communication skills that serve them throughout their lives. Whether a student dreams of Broadway or simply wants to try something new, OBCT provides a supportive environment where they can explore their talents.

Our Programs
OBCT offers year-round classes in acting, singing, and dancing for ages 4-18. We produce 3-4 full-scale musical productions each year, plus summer camps, workshops, and special performances. Our professional teaching staff brings decades of combined experience in theater, education, and child development.

Our Impact
Over the past 25 years, OBCT has taught over 1,000 students, produced more than 100 shows, and built a community of theater lovers in North Atlanta. Many of our alumni have gone on to pursue theater in college and professionally, while others have taken the skills they learned here into careers in education, business, and public service.

Join Us
Whether you\'re looking for your child\'s first introduction to theater or advanced training for a serious young performer, OBCT has a place for you. We invite you to visit our studio, meet our teachers, and discover the magic of live theater!',
        ]);

        $this->command->info('✅ Test data created successfully!');
        $this->command->info('');
        $this->command->info('Created:');
        $this->command->info('- 3 Shows (1 current, 1 upcoming, 1 past)');
        $this->command->info('- 6 Classes');
        $this->command->info('- 3 Teachers');
        $this->command->info('- 4 Announcements (1 alert, 3 news)');
        $this->command->info('- 3 Testimonials');
        $this->command->info('- 8 FAQs');
        $this->command->info('- 2 Troupes');
        $this->command->info('- 1 About Page');
    }
}
