<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FrontHome extends Component
{
    public function render()
    {
        return view('livewire.front-home')->layout('layouts.front');
    }
}
