<?php

namespace App\Http\Livewire\Categories;

use Livewire\Component;
use App\Models\Advertisement;
class Holidays extends Component
{
    public $category;
    public function render()
    {
        $holidays = Advertisement::latest()->with('image','category','country','state','city')->where('category_id',$this->category->id)->get();
        return view('livewire.categories.holidays',['holidays'=>$holidays]);
    }
}
