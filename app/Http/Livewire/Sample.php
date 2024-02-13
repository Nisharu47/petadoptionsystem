<?php

namespace App\Http\Livewire;
use App\Models\Category;
use Livewire\Component;
use DB;

class Sample extends Component
{
    public $categoryName = '';
    public $list_data = [];
    public $key = 0;
  
    function saveData()
     {
        if ($this->key == 0) {
            //save
            $data = new Category();
            $data->category_name = $this->categoryName;
            $data->save();
        } else {
            //update
            $data = Category::find($this->key);
            $data->category_name = $this->categoryName;
            $data->save();
        }

    }

    function updateData($id)
     {
        $data = Category::find($id);
        $this->categoryName = $data->category_name;
        $this->key = $id;
    }

    function showData()
     {
        $this->list_data = DB::table('categories')
                            ->select('categories.*')
                            ->get();
    }

    function deleteData($id)
     {
        $data = Category::find($id);
        $data->delete();

    }

    public function render()
    {
        $this->showData();
        return view('livewire.sample')->layout('layouts.master');
    }
}
