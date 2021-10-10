<?php

namespace App\Http\Livewire\Categories;

use Livewire\Component;
use App\Models\Advertisement;
class Pets extends Component
{
    public $category;
    public function render()
    {
        $pets = Advertisement::latest()->with('image','category','country','state','city')->where('category_id',$this->category->id)->get();
        return view('livewire.categories.pets',['pets'=>$pets]);
    }
}
