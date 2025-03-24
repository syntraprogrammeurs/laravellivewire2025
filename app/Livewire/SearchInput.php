<?php

namespace App\Livewire;

use Livewire\Component;

class SearchInput extends Component
{
    public $query='';
    public function updatedQuery(){
        //versturen van de ingetikte tekst naar een ander component (searchresults)
        $this->dispatch('search-updated', query:$this->query);
    }
    public function render()
    {
        return view('livewire.search-input');
    }
}
