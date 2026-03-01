<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use App\Models\Show;

#[Layout('components.layout')]
#[Title('Shows - Off Broadway Children\'s Theatre')]
class Shows extends Component
{
    public function getCurrentShowProperty()
    {
        return Show::query()->where('status', 'current')->first();
    }

    public function getUpcomingShowsProperty()
    {
        return Show::query()
            ->where('status', 'upcoming')
            ->orderBy('start_date')
            ->get();
    }

    public function getPastShowsProperty()
    {
        return Show::query()
            ->where('status', 'past')
            ->orderBy('start_date', 'desc')
            ->limit(6)
            ->get();
    }

    public function render()
    {
        return view('livewire.shows');
    }
}
