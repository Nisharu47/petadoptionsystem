<?php

namespace App\Http\Livewire;
use App\Models\Customer as CustomerModel;
use Livewire\Component;
use DB;

class Customer extends Component
{
    public $customer_name='';
    public $customer_email='';
    public $customer_phone='';
    public $customer_address='';
    public $list_data=[];
    public $key=0;

    function save()
    {
        if ($this->key==0) {
            $data=new CustomerModel();
            $data->name=$this->customer_name;
            $data->email=$this->customer_email;
            $data->phone_no=$this->customer_phone;
            $data->address=$this->customer_address;
            $data->save();
        }else {
            $data= CustomerModel::find(this->key);
            $data->name=$this->customer_name;
            $data->email=$this->customer_email;
            $data->phone_no=$this->customer_phone;
            $data->address=$this->customer_address;
            $data->save();
        }
    }

    function updateData($id)
    {
        $data =CustomerModel::find($id);
        $this->customer_name = $data->name;
        $this->customer_email = $data->email;
        $this->customer_phone = $data->phone_no;
        $this->customer_address = $data->address;
        $this->key=$id;

    }
    function showdata(){
        $this->list_data= DB::table('customers')
                            ->select('customers.*')
                            ->get();
    }

    function DeleteData($id){
        $Delete=CustomerModel::find($id);
        $Delete->Delete();
    }
    public function render()
    {
        $this->showdata();
        return view('livewire.customer')->layout('layouts.master');
    }
}
