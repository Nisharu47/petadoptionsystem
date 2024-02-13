<?php

namespace App\Http\Livewire;
use App\Models\Pettable;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Pet extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $pet_name = '';
    public $pet_species = '';
    public $pet_age = '';
    public $pet_gender = '';
    public $pet_description = '';
    public $status;
    public $photos = [];
    public $selected_id;
    public $view = [];

    public $message = '';
    public $searchKey;
    public $key = 0;

        //open model insert
        public function openModel()
        {
            $this->dispatchBrowserEvent('insert-show-form');
        }

        //close model insert
        public function closeModel()
        {
            $this->dispatchBrowserEvent('insert-hide-form');
        }

        //open model delete
        public $delete_id = 0;
        public function deleteOpenModel($id)
        {
            $this->delete_id = $id;
            $this->dispatchBrowserEvent('delete-show-form');
        }

        #delete Data
        public function deleteRecord()
        {
            # code...
            if ($this->delete_id != 0) {
                $data = Pettable::find($this->delete_id);
                $data->delete();
                $this->deleteCloseModel();
            }
        }

        //close model close
        public function deleteCloseModel()
        {
            $this->dispatchBrowserEvent('delete-hide-form');
        }


    public $view_id = 0;
    public function openViewModel( $id )
    {
        $this->view = Pettable::select('pettables.*')
        ->where('pettables.id','=',$id)
        ->get();
        $this->dispatchBrowserEvent('view-show-form');
    }

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
        $data = Pettable::find($this->selected_id);
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

    public function saveData()
    {


        if ($this->key == 0) {
            $this->validate([
                'pet_name' => 'required',
                'pet_species' => 'required',
                'pet_age' => 'required',
                'pet_gender' => 'required',
                'photos.*' => 'image',
                'pet_description' => 'required',
            ]);

            $data = new Pettable();
            $data->name = $this->pet_name;
            $data->species = $this->pet_species;
            $data->age = $this->pet_age;
            $data->gender = $this->pet_gender;
            foreach ($this->photos as $photo) {
                if (!empty($photo)) {
                    $imageUpload = $photo->store('photos', 'public');
                    $data->file_name = $imageUpload;
                    break;
                }
            }
            $data->description = $this->pet_description;
            $data->save();
            $this->clearData();
            $this->closeModel();
        } else {
            $this->validate([
                'pet_name' => 'required',
                'pet_species' => 'required',
                'pet_age' => 'required',
                'pet_gender' => 'required',
                'photos.*' => 'image',
                'pet_description' => 'required',
            ]);

            $data =  Pettable::find($this->key);
            $data->name = $this->pet_name;
            $data->species = $this->pet_species;
            $data->age = $this->pet_age;
            $data->gender = $this->pet_gender;
            foreach ($this->photos as $photo) {
                if (!empty($photo)) {
                    $imageUpload = $photo->store('photos', 'public');
                    $data->file_name = $imageUpload;
                    break;
                }
            }
            $data->description = $this->pet_description;
            $data->save();
            $this->clearData();
            $this->closeModel();
        }


    }

    public function updateRecord($id)
    {
        # code...
        $this->openModel();
        $data = Pettable::find($id);
        $this->pet_name = $data->name;
        $this->pet_species = $data->species;
        $this->pet_age = $data->age;
        $this->pet_gender = $data->gender;
        $this->pet_description = $data->description;
        $this->key = $id;
    }

    public function clearData()
    {
        $this->pet_name = "";
        $this->pet_species = "";
        $this->pet_age = "";
        $this->pet_gender = "";
        $this->pet_description = "";
        $this->key = 0;
    }

    public function fetchData()
    {

    }


    public function render()
    {
        if (!$this->searchKey) {
            $list_data = DB::table('pettables')
                        ->select('pettables.*')
                        ->latest()
                        ->paginate(10);
        } else {
            $list_data = DB::table('pettables')
                        ->select('pettables.*')
                        ->where('pettables.name','LIKE','%'.$this->searchKey.'%')
                        ->orWhere('pettables.description','LIKE','%'.$this->searchKey.'%')
                        ->orWhere('pettables.species','LIKE','%'.$this->searchKey.'%')
                        ->orWhere('pettables.age','LIKE','%'.$this->searchKey.'%')
                        ->orWhere('pettables.gender','LIKE','%'.$this->searchKey.'%')
                        ->latest()
                        ->paginate(10);
        }
        $this->fetchData();
        return view('livewire.pet',['list_data' =>$list_data])->layout('layouts.master');
    }
}
