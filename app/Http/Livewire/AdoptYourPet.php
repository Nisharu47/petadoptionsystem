<?php

namespace App\Http\Livewire;
use App\Models\Pettable;
use Livewire\Component;
use Auth;
use DB;
class AdoptYourPet extends Component
{

public $pets;


public function fetchPetDetails()
{
    $this->pets = Pettable::get();

}


    public function render()
    {
        $this->fetchPetDetails();
        return view('livewire.adopt-your-pet')->layout('layouts.front');
    }
}
