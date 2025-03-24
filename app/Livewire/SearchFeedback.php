<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class SearchFeedback extends Component
{
    public string $currentSearch = '';

    #[On('search-term-updated')]
    public function handleSearchUpdate($searchTerm)
    {
        $this->currentSearch = $searchTerm;
    }

    public function render()
    {
        return view('livewire.search-feedback');
    }
} 