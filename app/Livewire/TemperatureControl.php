<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Temperature Control')]
class TemperatureControl extends Component
{
    public int $temperature = 20;
    public int $minTemp = 15;
    public int $maxTemp = 25;

    public function increment()
    {
        if ($this->temperature < $this->maxTemp) {
            $this->temperature++;
        }
    }

    public function decrement()
    {
        if ($this->temperature > $this->minTemp) {
            $this->temperature--;
        }
    }

    public function render()
    {
        return view('livewire.temperature-control');
    }
} 