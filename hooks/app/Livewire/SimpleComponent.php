<?php

namespace App\Livewire;

use Livewire\Component;
use app\Http\Controllers\SimpleComponentController;

class SimpleComponent extends Component
{
    public $message;

    public function mount()
    {
        $this->setMessage();
    }

    private function setMessage()
    {
        $this->message = 'Merhaba bu bir basit Livewire bileşeni örneğidir.';
    }

    public function render()
    {
        return view('livewire.simple-component', ['message' => $this->message]);
    }
}