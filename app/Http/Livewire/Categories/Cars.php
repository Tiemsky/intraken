<?php

namespace App\Http\Livewire\Categories;

use App\Models\Advertisement;
use App\Models\Category;
use Livewire\Component;

class Cars extends Component
{
    public $category;
    public function render()
    {
        $cars = Advertisement::latest()->with('image','vehicle','category','city','state','country')->where('category_id',$this->category->id)->get();
        return view('livewire.categories.cars',['cars'=>$cars]);
    }
}
