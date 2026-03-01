<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use App\Models\Show;
use App\Models\Announcement;
use App\Models\Classes;
use App\Models\Testimonial;

#[Layout('components.layout')]
#[Title('Home - Off Broadway Children\'s Theatre')]
class Home extends Component
{
    public function getCurrentShowProperty()
    {
        return Show::query()
            ->where('status', 'current')
            ->first();
    }

    public function getUpcomingShowsProperty()
    {
        return Show::query()
            ->where('status', 'upcoming')
            ->orderBy('start_date')
            ->limit(3)
            ->get();
    }

    public function getAlertsProperty()
    {
        return Announcement::query()
            ->where('type', 'alert')
            ->where('active', true)
            ->latest()
            ->get();
    }

    public function getNewsProperty()
    {
        return Announcement::query()
            ->where('type', 'news')
            ->where('active', true)
            ->latest()
            ->limit(3)
            ->get();
    }

    public function getFeaturedClassesProperty()
    {
        return Classes::query()
            ->where('active', true)
            ->orderBy('order')
            ->limit(6)
            ->get();
    }

    public function getTestimonialsProperty()
    {
        return Testimonial::query()
            ->where('active', true)
            ->where('featured', true)
            ->orderBy('order')
            ->limit(3)
            ->get();
    }

    public function render()
    {
        return view('livewire.home');
    }
}
