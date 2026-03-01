<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use App\Models\Page;

#[Layout('components.layout')]
#[Title('About Us - Off Broadway Children\'s Theatre')]
class About extends Component
{
    public function getPageProperty()
    {
        return Page::where('slug', 'about')->first();
    }

    public function render()
    {
        return view('livewire.about');
    }
}
