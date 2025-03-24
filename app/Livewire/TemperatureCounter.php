<?php

namespace App\Livewire;

use Livewire\Component;

class TemperatureCounter extends Component
{
    public $temperature = 20;
    public $minTemp = 15;
    public $maxTemp = 25;

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
        return view('livewire.temperature-counter');
    }
} 