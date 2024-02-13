<?php

namespace App\Http\Livewire;
use App\Models\Petbooking;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;



class PetBookings extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $searchKey;
    public $status;
    public $selected_id;

    public function viewCloseModel()
    {
        $this->dispatchBrowserEvent('view-hide-form');
    }

    public function openStatusChangeModel()
    {
           $this->dispatchBrowserEvent( 'status-show-form' );
    }

    public function statusChangeModel($id, $status)
    {
        $this->selected_id = $id;
        $this->status = $status;
        $this->openStatusChangeModel();
    }

    public function closeStatusChangeModel()
    {
        $this->dispatchBrowserEvent( 'status-hide-form' );
    }

    public function saveStatusChangeModel()
    {
        $data = Petbooking::find($this->selected_id);
        $data->status = (int)$this->status;
        $data->save();
        $this->statusClear();

    }

    public function statusClear()
    {
        $this->selected_id = null;
        $this->pet_status = null;
        $this->closeStatusChangeModel();
    }

    public function fetchData()
    {

    }

    public function render()
    {
        if (!$this->searchKey) {
            $list_data = DB::table('petbookings')
                        ->select('petbookings.*','customers.customer_fname','pettables.name')
                        ->leftJoin('customers','petbookings.customer_id','customers.id')
                        ->leftJoin('pettables','petbookings.pet_id','pettables.id')
                        ->latest()
                        ->paginate(10);
        } else {
            $list_data = DB::table('petbookings')
                        ->select('petbookings.*','customers.customer_fname','pettables.name')
                        ->leftJoin('customers','petbookings.customer_id','customers.id')
                        ->leftJoin('pettables','petbookings.pet_id','pettables.id')
                        ->where('customers.customer_fname','LIKE','%'.$this->searchKey.'%')
                        ->orWhere('pettables.name','LIKE','%'.$this->searchKey.'%')
                        ->latest()
                        ->paginate(10);
        }
        $this->fetchData();
        return view('livewire.pet-bookings',['list_data' => $list_data])->layout('layouts.master');
    }
}
