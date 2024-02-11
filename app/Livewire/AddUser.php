<?php

namespace App\Livewire;
use App\Models\User;
use Livewire\Component;

class AddUser extends Component
{

    public $name;
    public $email;
    public $users;
    public function mount()
    {
        // Initialisez la liste des utilisateurs lors du chargement du composant
        $this->users = User::all();
    }

    public function addUser()
    {
       
    
       
        
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password'=>0,
            'firstName'=>'tst',
            'adress'=>'tst',
        ]);
        $this->mount();
        // Effacez les champs après l'ajout
        $this->reset(['name', 'email']);
    }

    public function render()
    {
        return view('livewire.add-user');
    }
}
