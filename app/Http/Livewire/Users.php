<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use Hash;

class Users extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $message = '';
    public $searchKey;
    public $key = 0;

    public $user_name = '';
    public $user_email = '';
    public $user_password = '';
    public $user_confirm_password = '';
    public $user_type = '';


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
                $data = User::find($this->delete_id);
                $data->delete();
                $this->deleteCloseModel();
            }
        }

        //close model close
        public function deleteCloseModel()
        {
            $this->dispatchBrowserEvent('delete-hide-form');
        }

    public function saveData()
    {


        if ($this->key == 0) {
            $this->validate([
                'user_name' => 'required',
                'user_email' => 'required|email|regex:/(.*)\./i|unique:customers,customer_email',
                'user_password' => 'required',
                'user_confirm_password' => 'required_with:password|same:user_password',
            ]);

            $data = new User();
            $data->name = $this->user_name;
            $data->email = $this->user_email;
            $data->password = Hash::make($this->user_password);
            $data->user_type = $this->user_type;
            $data->save();
            $this->clearData();
            $this->closeModel();
        } else {
            $this->validate([
                'user_name' => 'required',
                'user_email' => 'required|email|regex:/(.*)\./i|unique:customers,customer_email',
                'user_password' => 'required',
                'user_confirm_password' => 'required_with:password|same:user_password',
            ]);

            $data = User::find($this->key);
            $data->name = $this->user_name;
            $data->email = $this->user_email;
            $data->password = Hash::make($this->user_password);
            $data->user_type = $this->user_type;
            $data->save();
            $this->clearData();
            $this->closeModel();
        }


    }

    public function updateRecord($id)
    {
        # code...
        $this->openModel();
        $data = User::find($id);
        $this->user_name = $data->name;
        $this->user_email = $data->email;
        $this->user_type = $data->user_type;
        $this->key = $id;
    }

    public function clearData()
    {
        $this->user_name = "";
        $this->user_email = "";
        $this->user_password = "";
        $this->user_confirm_password = "";
        $this->user_type = "";
        $this->key = 0;
    }

    public function fetchData()
    {

    }
    public function render()
    {
        if (!$this->searchKey) {
            $list_data = DB::table('users')
                        ->select('users.*')
                        ->latest()
                        ->paginate(10);
        } else {
            $list_data = DB::table('users')
                        ->select('users.*')
                        ->where('users.name','LIKE','%'.$this->searchKey.'%')
                        ->orWhere('users.email','LIKE','%'.$this->searchKey.'%')
                        ->orWhere('users.user_type','LIKE','%'.$this->searchKey.'%')
                        ->latest()
                        ->paginate(10);
        }
        $this->fetchData();
        return view('livewire.users',['list_data' => $list_data])->layout('layouts.master');
    }
}
