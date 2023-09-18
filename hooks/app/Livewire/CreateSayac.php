<?php

namespace App\Livewire;
use Livewire\Component;

class CreateSayac extends Component
{
    public $count = 0;

    public function mount()
    {
        
        $this->count = 10; 
    }
    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count = $this->count - 6;
    }
    public function hydrate()
    {

        $this->count = $this->count + 5;
    }
    
    public function render()
    {
        return view('livewire.create-sayac');
    }
}
