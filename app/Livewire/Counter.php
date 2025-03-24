<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;
    public $min = 1;
    public $max = 10;

    public function increment(){
        $this->count++;
    }
    public function decrement(){
        $this->count--;
    }
    public function resetCount(){
        $this->count = 1;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
