<?php

namespace App\Http\Livewire\Banner;

use App\Models\Advertisement;
use App\Models\Category;
use Livewire\Component;
use App\Models\Country;

class BannerSearch extends Component
{
    public $countries;
    public $categories;
    public $category_id;
    public $country_id;
    public $search;
    public function mount()
    {
        $this->countries= Country::all();
       
        $this->categories = Category::all();
    }

    public function search(){
       
        $ads = Advertisement::where('country_id',$this->country_id)
                            ->orWhere('category_id',$this->category_id)
                            ->orWhere('title','like','%$this->search%')
                            // ->where($this->search,function($query){
                            //     $query->where('title','like',$this->search);
                            // })
                            ->get();
                            return view('ads.searchAd', compact('ads'));
            // return redirect()->route('search',[app()->getLocale()]);
    }
    public function render()
    {
       
        return view('livewire.banner.banner-search');
    }
}
