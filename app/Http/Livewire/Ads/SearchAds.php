<?php

namespace App\Http\Livewire\Ads;

use App\Models\Category;
use Livewire\Component;

class SearchAds extends Component
{
    public $ads;
    public function render()
    {
        $categories = Category::with('subCategories','ads')->get();
        return view('livewire.ads.search-ads', compact('categories'));
    }
}
