<?php

namespace App\Http\Livewire;
use App\Models\Petbooking;
use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Auth;

class BookYourPet extends Component
{
    public $pets = [];
    public $CustomerId;
    public $petId;

    public $petview = [];


    public function mount($id)
    {
        $this->petId = $id;
    }
    public function fetchData()
    {
        $this->petview = DB::table('pettables')
        ->select('pettables.*')
        ->where('id', '=', $this->petId)
        ->get();



        $customer = Auth::guard('customer')->user();
        $this->customerId = $customer->id;

    }

    public function render()
    {

        $this->fetchData();
        return view('livewire.book-your-pet')->layout('layouts.front');
    }
}
