<?php

namespace App\Livewire;
use App\Models\User;
use Livewire\Component;

class Refrechuserpage extends Component
{
    public $user;

    public function mount($userId)
    {
        $this->user = User::find($userId);
    }

    public function render()
    {
        return view('livewire.refrechuserpage');
    }

    public function updatedUser()
    {
        if ($this->user->role == 1) {
            $this->emit('roleUpdated');
        }
    }
}
