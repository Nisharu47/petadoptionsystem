<?php

namespace App\Http\Livewire;
use App\Models\Contactus;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use Livewire\Component;

class ContactUsComponent extends Component
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
            $list_data = DB::table('contactuses')
                        ->select('contactuses.*','customers.customer_fname')
                        ->leftJoin('customers','contactuses.customer_id','customers.id')
                        ->latest()
                        ->paginate(10);
        } else {
            $list_data = DB::table('contactuses')
                        ->select('contactuses.*','customers.customer_fname')
                        ->leftJoin('customers','contactuses.customer_id','customers.id')
                        ->where('contactuses.name','LIKE','%'.$this->searchKey.'%')
                        ->orWhere('contactuses.email','LIKE','%'.$this->searchKey.'%')
                        ->orWhere('contactuses.subject','LIKE','%'.$this->searchKey.'%')
                        ->latest()
                        ->paginate(10);
        }
        $this->fetchData();

        return view('livewire.contact-us-component',['list_data' => $list_data])->layout('layouts.master');
    }
}
