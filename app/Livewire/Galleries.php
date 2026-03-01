<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use App\Models\Gallery;

#[Layout('components.layout')]
#[Title('Gallery - Off Broadway Children\'s Theatre')]
class Galleries extends Component
{
    public function getGalleriesProperty()
    {
        return Gallery::query()
            ->where('active', true)
            ->with('images')
            ->orderBy('order')
            ->get();
    }

    public function render()
    {
        return view('livewire.galleries');
    }
}
