<?php

namespace App\Http\Livewire\Categories;

use Livewire\Component;
use App\Models\Advertisement;

class Motorcycles extends Component
{
    public $category; //coming from controller
    public function render()
    {
        $motorcycles = Advertisement::latest()->with('image','category','country','state','city')->where('category_id',$this->category->id)->get();
        return view('livewire.categories.motorcycles',['motorcycles'=>$motorcycles]);
    }
}
