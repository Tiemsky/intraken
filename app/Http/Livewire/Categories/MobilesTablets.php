<?php

namespace App\Http\Livewire\Categories;

use Livewire\Component;
use App\Models\Category;
use App\Models\Advertisement;

class MobilesTablets extends Component
{
    public $category;
    public function render()
    {
        $mobiles = Advertisement::latest()->with('image','category','country','state','city')->where('category_id',$this->category->id)->get();
        return view('livewire.categories.mobiles-tablets',['mobiles'=>$mobiles]);
    }
}
