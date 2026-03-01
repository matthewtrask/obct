<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use App\Models\Faq as FaqModel;

#[Layout('components.layout')]
#[Title('FAQ - Off Broadway Children\'s Theatre')]
class Faq extends Component
{
    public function getFaqsProperty()
    {
        return FaqModel::query()
            ->where('active', true)
            ->orderBy('order')
            ->get()
            ->groupBy('category');
    }

    public function render()
    {
        return view('livewire.faq');
    }
}
