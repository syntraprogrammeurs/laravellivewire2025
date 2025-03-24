<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class ResetControl extends Component
{
    public int $lastCount = 5;

    #[On('counter-changed')]
    public function handleCounterChange($count)
    {
        $this->lastCount = $count['count'];
    }

    public function resetCounter()
    {
        $this->dispatch('reset-counter');
    }

    public function render()
    {
        return view('livewire.reset-control');
    }
} 