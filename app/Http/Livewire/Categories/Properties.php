<?php

namespace App\Http\Livewire\Categories;

use Livewire\Component;
use App\Models\Advertisement;
class Properties extends Component
{
    public $category;
    public function render()
    {
        $properties = Advertisement::latest()->with('image','category','country','state','city')->where('category_id',$this->category->id)->get();
        return view('livewire.categories.properties',['properties'=>$properties]);
    }
}
