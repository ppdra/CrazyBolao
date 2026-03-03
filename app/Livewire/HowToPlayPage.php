<?php

namespace App\Livewire;

use Livewire\Component;

class HowToPlayPage extends Component
{
    public int $activeSectionId = 1;

    public function render()
    {
        return view('livewire.how-to-play-page');
    }
}
