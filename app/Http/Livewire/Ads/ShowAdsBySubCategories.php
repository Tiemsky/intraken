<?php

namespace App\Http\Livewire\Ads;

use App\Models\Advertisement;
use App\Models\Category;
use App\Models\SubCategory;
use Livewire\Component;

class ShowAdsBySubCategories extends Component
{
    public $categorySlug;
    public $subCategorySlug;
    public function render()
    {
        
        $subCategoryObject = SubCategory::where('slug', $this->subCategorySlug)->first();
        $ads = Advertisement::with('country','state','city','image','category')
                            ->where('sub_category_id', $subCategoryObject->id)
                            ->get();
        $categories = Category::with('subCategories')->where('slug', $this->categorySlug)->get();
        return view('livewire.ads.show-ads-by-sub-categories', compact('ads', 'categories'));
    }
}
