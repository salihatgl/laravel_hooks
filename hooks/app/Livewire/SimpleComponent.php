<?php

namespace App\Livewire;

use Livewire\Component;

class SimpleComponent extends Component
{

    protected $message;

    public function mount()
    {
        $this->setMessage();
    }

    public function render()
    {
        return view('livewire.simple-component', ['message' => $this->message]);
    }

    private function setMessage()
    {
        $this->message = 'Merhaba bu bir basit Livewire bileşeni örneğidir.';
    }
}
