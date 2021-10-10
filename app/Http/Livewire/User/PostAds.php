<?php

namespace App\Http\Livewire\User;


use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\Category;
use App\Models\SubCategory;
use Livewire\Component;

class PostAds extends Component
{
    //Country-State-City
    public $countries;
    public $states;
    public $cities;
    public $selectedCountry = null;
    public $selectedState = null;
    public $selectedCity = null;
    

    //Category-SubCategory
    public $categories;
    public $subCategories;
    public $selectedCategory=NULL;
    public $selectedSubCategory = NULL;

    public function mount($selectedSubCategory = NULL, $selectedCity = null)
    {

        //Country-State-City
        $this->countries = Country::all();
        $this->states = collect();
        $this->cities = collect();
        $this->selectedCity = $selectedCity;


         //Category-SubCategory
         $this->categories = Category::all();
         $this->subCategories = collect();
         $this->selectedCategory = $selectedSubCategory;


         //Country-State-City
        if (!is_null($selectedCity)) {
            $city = City::with('state.country')->find($selectedCity);
            if ($city) {
                $this->cities = City::where('state_id', $city->state_id)->get();
                $this->states = State::where('country_id', $city->state->country_id)->get();
                $this->selectedCountry = $city->state->country_id;
                $this->selectedState = $city->state_id;
            }
        }
        
        //Category-SubCategory
        if(!is_null($selectedSubCategory))
        {
            $subCategory = SubCategory::with('category')->find($selectedSubCategory);
            if($subCategory){
                $this->subCategories = SubCategory::where('category_id', $subCategory->category_id)->get();
                $this->selectedCategory = $subCategory->category_id;
            }

        }
    }


     public function updatedSelectedCategory($category)
    {
        if (!is_null($category)) {
            $this->subCategories = SubCategory::where('category_id', $category)->get();
        }
    }

   
    public function updatedSelectedCountry($country)
    {
        $this->states = State::where('country_id', $country)->get();
        $this->selectedState = NULL;
    }

    public function updatedSelectedState($state)
    {
        if (!is_null($state)) {
            $this->cities = City::where('state_id', $state)->get();
        }
    }

    public function render()
    {
       
        return view('livewire.user.post-ads');
    }


    public function store()
    {
        dd($this->selectedCountry );
    }

   
}
