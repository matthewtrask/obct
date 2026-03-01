<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use App\Models\Teacher;

#[Layout('components.layout')]
#[Title('Teachers - Off Broadway Children\'s Theatre')]
class Teachers extends Component
{
    public function getTeachersProperty()
    {
        return Teacher::query()
            ->where('active', true)
            ->orderBy('order')
            ->get();
    }

    public function render()
    {
        return view('livewire.teachers');
    }
}
