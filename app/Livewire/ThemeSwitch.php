<?php

namespace App\Livewire;

use Livewire\Component;

class ThemeSwitch extends Component
{
    public bool $darkMode = false;

    public function mount()
    {
        // Initialize from Alpine.js state which is set from localStorage
        $this->darkMode = request()->cookie('darkMode') === 'true';
    }

    public function toggleTheme()
    {
        $this->darkMode = !$this->darkMode;
        $this->dispatch('dark-mode-changed', darkMode: $this->darkMode);
    }

    public function render()
    {
        return view('livewire.theme-switch');
    }
}
