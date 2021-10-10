<?php

namespace App\Http\Livewire\Categories;

use Livewire\Component;
use App\Models\Category;
use App\Models\Advertisement;

class ElectronicsAppliances extends Component
{
    public $category;
    public function render()
    {
        $electronics = Advertisement::latest()->with('image','category','country','state','city')->where('category_id',$this->category->id)->get();
        return view('livewire.categories.electronics-appliances',['electronics'=>$electronics]);
    }
}
