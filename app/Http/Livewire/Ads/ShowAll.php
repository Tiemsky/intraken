<?php

namespace App\Http\Livewire\Ads;

use App\Models\Advertisement;
use App\Models\Category;
use Livewire\Component;

class ShowAll extends Component
{
    public function render()
    {
        $categories = Category::with('subCategories')->get();
        $ads = Advertisement::with('category','country','state','city','image')->get(); 
        return view('livewire.ads.show-all', compact('categories','ads'));
    }
}
