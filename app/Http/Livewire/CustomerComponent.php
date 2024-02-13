<?php

namespace App\Http\Livewire;
use App\Models\Customer;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class CustomerComponent extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $searchKey;

    public function fetchData()
    {

    }

    public function render()
    {
        if (!$this->searchKey) {
            $list_data = DB::table('customers')
                        ->select('customers.*')
                        ->latest()
                        ->paginate(10);
        } else {
            $list_data = DB::table('customers')
                        ->select('customers.*')
                        ->where('customers.customer_fname','LIKE','%'.$this->searchKey.'%')
                        ->orWhere('customers.customer_tp','LIKE','%'.$this->searchKey.'%')
                        ->orWhere('customers.customer_email','LIKE','%'.$this->searchKey.'%')
                        ->latest()
                        ->paginate(10);
        }
        $this->fetchData();
        return view('livewire.customer-component',['list_data' => $list_data])->layout('layouts.master');
    }
}
