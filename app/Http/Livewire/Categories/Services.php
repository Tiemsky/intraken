<?php

namespace App\Http\Livewire\Categories;

use Livewire\Component;
use App\Models\Advertisement;
class Services extends Component
{
    public $category;
    public function render()
    {
        $services = Advertisement::latest()->with('image','category','country','state','city')->where('category_id',$this->category->id)->get();
        return view('livewire.categories.services',['services'=>$services]);
    }
}
