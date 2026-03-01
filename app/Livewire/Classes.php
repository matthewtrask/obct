<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('components.layout')]
#[Title('Classes - Off Broadway Children\'s Theatre')]
class Classes extends Component
{
    public $selectedType = 'all';

    public function getClassesProperty()
    {
        $query = \App\Models\Classes::query()->where('active', true)->orderBy('order');

        if ($this->selectedType !== 'all') {
            $query->where('session_type', $this->selectedType);
        }

        return $query->get();
    }

    public function render()
    {
        return view('livewire.classes');
    }
}
