<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Gebruikersbeheer')]
class ShowUsers extends Component
{
    use WithPagination;
    public $search = '';
    public $perPage = 10;
    public $showDeleted = true;
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        return view('livewire.users.show-users', [
            'users' => User::query()
                ->when($this->search, function ($query) {
                    $query->where(function ($query) {
                        $query->where('name', 'like', '%' . $this->search . '%')
                            ->orWhere('email', 'like', '%' . $this->search . '%');
                    });
                })
                ->when($this->showDeleted, function ($query) {
                    $query->withTrashed();
                })
                ->latest()
                ->paginate($this->perPage),
        ]);
    }
    public function delete(User $user)
    {
        $user->delete();
        session()->flash('message', 'Gebruiker verwijderd.');
        session()->flash('message_type', 'error');
    }
    public function forceDelete($userId)
    {
        User::withTrashed()->find($userId)->forceDelete();
        session()->flash('message', 'Gebruiker permanent verwijderd.');
        session()->flash('message_type', 'error');
    }

    public function restore($userId)
    {
        User::withTrashed()->find($userId)->restore();
        session()->flash('message', 'Gebruiker hersteld.');
        session()->flash('message_type', 'success');
    }
}
