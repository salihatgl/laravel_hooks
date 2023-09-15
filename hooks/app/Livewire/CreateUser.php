<?php

namespace App\Livewire;
use app\Models\User;

use Livewire\Component;

class CreateUser extends Component
{
    public $count = 0;

    public function render()
    {
        return view('livewire.create-user');
    }

    public function increment()
    {
        $this->count++;
    }

    public function updated()
    {
        // Bu metod herhangi bir özellik güncellendiğinde çağrılır.
        // Burada istediğiniz herhangi bir işlemi yapabilirsiniz.
    }
   
}
