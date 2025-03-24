<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Registratieformulier')]
class RegistrationForm extends Component
{
    public string $firstName = '';
    public string $lastName = '';
    public string $email = '';

    public function save()
    {
        $this->validate([
            'firstName' => 'required|min:2',
            'lastName' => 'required|min:2',
            'email' => 'required|email'
        ]);

        session()->flash('success', 'Registratie succesvol!');
        $this->resetForm();
    }

    public function resetForm()
    {
        $this->reset(['firstName', 'lastName', 'email']);
    }

    public function render()
    {
        return view('livewire.registration-form');
    }
} 