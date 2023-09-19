<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\UserHook;

class SimpleComponent extends Component

{
    public $username = ' ';
    public $email = ' ';
    
    public function updatedUsername()
    {
        $this->username = strtolower($this->username);
    }

    public function save()
    {
        
        UserHook::create([
            'username' => $this->username,
            'email' => $this->email,
        ]);

        return redirect()->to('/mesaj');
    }

    public function render()
    {
        return view('livewire.simple-component');
    }
}

    