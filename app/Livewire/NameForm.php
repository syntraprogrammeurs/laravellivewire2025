<?php
namespace App\Livewire;

use Livewire\Component;

class NameForm extends Component
{
    public string $firstName = '';
    public string $lastName = '';
    public string $email = '';

    protected $rules = [
        'firstName' => 'required|min:2',
        'lastName' => 'required|min:2',
        'email' => 'required|email',
    ];

    protected $messages = [
        'firstName.required' => 'Voornaam is verplicht.',
        'firstName.min' => 'Voornaam moet minstens 2 tekens bevatten.',
        'lastName.required' => 'Achternaam is verplicht.',
        'lastName.min' => 'Achternaam moet minstens 2 tekens bevatten.',
        'email.required' => 'E-mailadres is verplicht.',
        'email.email' => 'Ongeldig e-mailadres formaat.',
    ];

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function submit()
    {
        $validated = $this->validate();
        // Simuleer verwerking
        session()->flash('success', 'Formulier succesvol verzonden!');
    }

    public function resetForm(){
        $this->reset(['firstName','lastName','email']);
        $this->resetErrorBag();
    }

    public function render()
    {
        return view('livewire.name-form');
    }
}
