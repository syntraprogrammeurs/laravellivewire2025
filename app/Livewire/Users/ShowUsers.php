<?php

namespace App\Livewire\Users;

use App\Exports\UsersExport;
use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

#[Title('Gebruikersbeheer')]
class ShowUsers extends Component
{
    use WithPagination;
    public $search = '';
    public $perPage = 10;
    public $showDeleted = true;
    public $showMessage=false;
    public $message='';
    public $messageType= 'success';
    public $messageClass= '';
    public $sortDirection='desc';
    public $sortField = 'created_at';

    public $selectedUsers = [];
    public $selectedAll = false;


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
                ->orderBy($this->sortField, $this->sortDirection)
                ->paginate($this->perPage),
        ]);
    }
    public function delete(User $user)
    {
        $user->delete();
        $this->showMessage('Gebruiker '. $user->name  .' verwijderd', 'error');
    }
    public function forceDelete($userId)
    {
        $user = User::withTrashed()->find($userId);
        $user->forceDelete();
        $this->showMessage('Gebruiker '. $user->name .' verwijderd', 'error');
    }

    public function restore($userId)
    {
        $user = User::withTrashed()->find($userId);
        $user->restore();
        $this->showMessage('Gebruiker '. $user->name .' hersteld', 'error');
    }

    public function bulkDelete(){
        $count = count($this->selectedUsers);
        User::whereIn('id', $this->selectedUsers)->delete();
        $this->selectedUsers=[];
        $this->selectedAll = false;
        $this->showMessage($count . 'Gebruikers verwijderd', 'error');
    }
    public function bulkRestore(){
        $count = count($this->selectedUsers);
        User::withTrashed()->whereIn('id', $this->selectedUsers)->restore();
        $this->selectedUsers=[];
        $this->selectedAll = false;
        $this->showMessage($count . 'Gebruikers zijn hersteld', 'error');
    }
    public function bulkForceDelete(){
        $count = count($this->selectedUsers);
        User::withTrashed()->whereIn('id', $this->selectedUsers)->forceDelete();
        $this->selectedUsers=[];
        $this->selectedAll = false;
        $this->showMessage($count . 'Gebruikers zijn permanent verwijderd', 'error');
    }
    public function showMessage($message, $type = 'success')
    {
        $this->message = $message;
        $this->messageType = $type;
        $this->messageClass = match($type) {
            'success' => 'bg-green-100 border-green-400 text-green-700',
            'error' => 'bg-red-100 border-red-400 text-red-700',
            'info' => 'bg-blue-100 border-blue-400 text-blue-700',
            'warning' => 'bg-yellow-100 border-yellow-400 text-yellow-700',
            default => 'bg-gray-100 border-gray-400 text-gray-700',
        };
        $this->showMessage = true;
    }
    public function hideMessage(){
        $this->showMessage=false;
    }
    public function sortBy($field){
        if($this->sortField === $field){
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        }else{
            $this->sortField = $field;
            $this->sortDirection='asc';
        }
    }

    public function updatedSelectedAll($value)
    {
        if ($value) {
            $users = User::query()
                ->when($this->search, function ($query) {
                    $query->where(function ($query) {
                        $query->where('name', 'like', '%' . $this->search . '%')
                            ->orWhere('email', 'like', '%' . $this->search . '%');
                    });
                })
                ->when($this->showDeleted, function ($query) {
                    $query->withTrashed();
                })
                ->orderBy($this->sortField, $this->sortDirection)
                ->get();

            $this->selectedUsers = $users->pluck('id')->toArray();
        } else {
        $this->selectedUsers = [];
        }
    }
    public function toggleSelect($userId)
    {
        if (in_array($userId, $this->selectedUsers)) {
            $this->selectedUsers = array_diff($this->selectedUsers, [$userId]);
        } else {
            $this->selectedUsers[] = $userId;
        }

        // Update selectAll status door de zichtbare gebruikers te tellen
        $visibleUsers = User::query()
            ->when($this->search, function ($query) {
                $query->where(function ($query) {
                    $query->where('name', 'like', '%' . $this->search . '%')
                        ->orWhere('email', 'like', '%' . $this->search . '%');
                });
            })
            ->when($this->showDeleted, function ($query) {
                $query->withTrashed();
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->get();

        $this->selectedAll = count($this->selectedUsers) === $visibleUsers->count();
    }
    //export methodes
    public function exportCsv()
    {
        return Excel::download(new UsersExport($this->getExportQuery()), 'users.csv');
    }
    public function exportExcel()
    {
        return Excel::download(new UsersExport($this->getExportQuery()), 'users.xlsx');
    }
    private function getExportQuery()
    {
        return User::query()
            ->when($this->search, function ($query) {
                $query->where(function ($query) {
                    $query->where('name', 'like', '%' . $this->search . '%')
                        ->orWhere('email', 'like', '%' . $this->search . '%');
                });
            })
            ->when($this->showDeleted, function ($query) {
                $query->withTrashed();
            })
            ->when(!empty($this->selectedUsers), function ($query) {
                $query->whereIn('id', $this->selectedUsers);
            })
            ->orderBy($this->sortField, $this->sortDirection);
    }

}
