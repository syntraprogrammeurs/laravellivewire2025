<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class SearchResults extends Component
{
    public string $query='';

    //on= luistert naar het event(search-updated) die van ergens
    //werd uitgezonden.
    #[On('search-updated')]
    public function updateResults(string $query){
        $this->query= $query;
    }


    public function render()
    {
        return view('livewire.search-results');
    }
}
