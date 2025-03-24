<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class AdvancedRegistration extends Component
{
    public string $username = '';
    public string $email = '';
    public string $password = '';

    // Validatie regels
    protected array $rules = [
        'username' => 'required|min:3',
        'email' => 'required|email',
        'password' => 'required|min:6'
    ];

    // Real-time validatie voor username met debounce
    public function updatedUsername($value)
    {
        $validator = Validator::make(
            ['username' => $value],
            ['username' => 'required|min:3']
        );

        if ($validator->fails()) {
            $this->addError('username', $validator->errors()->first('username'));
        }
    }

    // Lazy validatie voor email
    public function updatedEmail($value)
    {
        $validator = Validator::make(
            ['email' => $value],
            ['email' => 'required|email']
        );

        if ($validator->fails()) {
            $this->addError('email', $validator->errors()->first('email'));
        }
    }

    public function submit()
    {
        $this->validate();

        // Hier zou je normaal de gebruiker registreren
        session()->flash('success', 'Registratie succesvol! Je account is aangemaakt.');
        
        // Reset het formulier
        $this->reset(['username', 'email', 'password']);
    }

    public function render()
    {
        return view('livewire.advanced-registration');
    }
} 