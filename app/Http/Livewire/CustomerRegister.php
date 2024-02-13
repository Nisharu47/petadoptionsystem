<?php

namespace App\Http\Livewire;
use Livewire\Component;

class CustomerRegister extends Component
{

    public function render()
    {
        return view('livewire.customer-register')->layout('layouts.front');
    }
}
