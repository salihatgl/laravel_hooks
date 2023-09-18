<?php

namespace App\Livewire;
use app\Models\User;

use Livewire\Component;

class CreateUser extends Component
{
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }
    public function hydrate()
    {

    $this->count;
    }
    public function update()
    {
    }

   
    public function render()
    {
        return view('livewire.create-user');
    }
}
