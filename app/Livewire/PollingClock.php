<?php

namespace App\Livewire;

use Livewire\Component;

class PollingClock extends Component
{
    public $time;

    public function mount()
    {
        $this->time = now()->format('H:i:s');
    }

    public function render()
    {
        $this->time = now()->format('H:i:s');
        return view('livewire.polling-clock');
    }
}
