<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class EventCounter extends Component
{
    public int $count = 5;

    public function increment()
    {
        $this->count++;
        $this->dispatch('counter-changed', ['count' => $this->count]);
    }

    public function decrement()
    {
        $this->count--;
        $this->dispatch('counter-changed', ['count' => $this->count]);
    }

    #[On('reset-counter')]
    public function resetCounter()
    {
        $this->count = 5;
        $this->dispatch('counter-changed', ['count' => $this->count]);
    }

    public function render()
    {
        return view('livewire.event-counter');
    }
} 