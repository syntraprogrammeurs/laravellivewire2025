<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Live Search')]
class SearchBox extends Component
{
    public string $searchTerm = '';
    public array $results = [];

    public function updatedSearchTerm()
    {
        if (strlen($this->searchTerm) > 0) {
            // Demo results - in een echte applicatie zou je hier je database doorzoeken
            $this->results = [
                "Result " . $this->searchTerm . " #1",
                "Result " . $this->searchTerm . " #2",
                "Result " . $this->searchTerm . " #3"
            ];
        } else {
            $this->results = [];
        }
        
        $this->dispatch('search-term-updated', searchTerm: $this->searchTerm);
    }

    public function render()
    {
        return view('livewire.search-box');
    }
} 