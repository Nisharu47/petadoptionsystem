<?php

namespace App\Http\Livewire;
use DB;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $customer = DB::table('customers')->count();
        $pets = DB::table('pettables')->count();
        $pet_booking = DB::table('petbookings')->count();
        $contactus = DB::table('contactuses')->count();
        return view('livewire.dashboard',compact('customer','pets','pet_booking','contactus'))->layout('layouts.master');
    }
}
