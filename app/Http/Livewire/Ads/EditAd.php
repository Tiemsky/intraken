<?php

namespace App\Http\Livewire\Ads;

use Livewire\Component;
use App\Models\Advertisement;
use App\Models\Category;
use App\Models\ChildCategory;
use App\Models\State;
use App\Models\Country;
use App\Models\City;
use App\Models\Image;
use App\Models\Property;
use App\Models\SubCategory;
use App\Models\Vehicle;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class EditAd extends Component
{
    use WithFileUploads;

    //Country-State-City
    public $countries;
    public $states;
    public $cities;
    public $selectedCountry =null;
    public $selectedState = null;
    public $selectedCity = null;

   
  
    //Country-State-City
    public $categories;
    public $subCategories;
    public $childCategories;
    public $selectedCategory =null;
    public $selectedSubCategory= null;
    public $selectedChildCategory = null;

    public $showChildCategory;

    public $photo0,$photo1,$photo2,$photo3,$photo4,$photo5;
    public $cars,$motorcycles,$houses,$offices,$lands_plots,$jobs_training;

    //Post ads properties
    public $title,$currency,$price,$description,$isNegotiable;
   
    //Cars details
    public $fuel,$year,$transmission,$kilometer;

    //properties
    public $furnishing, $bedroom, $bathroom, $status, $postedBy, $parking, $length;
    public $success_message;

    //props coming from blade
    public $ad;
    public $currentCountry;
    public $currentState;
    public $currentCity;

    public $currentCategory;
    public $currentSubCategory;
    public $currentChildCategory;
    public $isChildCategoryExist;

    public $updateCategory;
    public $updateLocation;
    public $showCurrentCategory=true;
    public $showCurrentLocation=true;
    public $adCurrentCategory = true;

    public function mount($selectedCity = null, $selectedChildCategory=null)
    {
       
    
        //Categories-subcategories-childCategories
        $this->categories = Category::all();
        $this->subCategories = collect();
        $this->childCategories = ChildCategory::where('sub_category_id',3)->get();
        $this->selectedChildCategory = $selectedChildCategory;

        //Country-State-City
        $this->countries = Country::all();
        $this->states = collect();
        $this->cities = collect();
        $this->selectedCity = $selectedCity;


        //grabbing value from db and display 
        $this->currentCountry  = $this->ad->city->state->country->name;
        $this->currentState    = $this->ad->city->state->name;
        $this->currentCity     = $this->ad->city->name;

        $this->currentCategory = $this->ad->category->category_name;
        $currentSubCategory =SubCategory::findOrFail($this->ad->sub_category_id);
        $this->currentSubCategory = $currentSubCategory->sub_category_name;
        $this->isChildCategoryExist =$this->ad->child_category_id ;
         if($this->isChildCategoryExist){
            $currentChildCategory = ChildCategory::findOrFail($this->ad->child_category_id);
            $this->currentChildCategory = $currentChildCategory->child_category_name;
         }

        $this->title=$this->ad->title;
        $this->price=$this->ad->price;
        $this->currency=$this->ad->currency;
        $this->isNegotiable=$this->ad->price_status;
        $this->description=$this->ad->description;
        
        

            //Categories-subcategories-childCategories
            if (!is_null($selectedChildCategory)) {
                $ChildCategory = ChildCategory::with('subCategory.category')->find($selectedChildCategory);
                if ($ChildCategory) {
                    $this->childCategories = ChildCategory::where('sub_category_id', $ChildCategory->sub_category_id)->get();
                    $this->subCategories = SubCategory::where('category_id', $ChildCategory->subCategory->category_id)->get();
                    $this->selectedCategory = $ChildCategory->subCategory->category_id;
                    $this->selectedSubCategory = $ChildCategory->sub_category_id;
                }
            }
        
        
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


        //displaying the current category
        $this->showCategoryField($currentSubCategory->id);
       //Cars initializing
       
       if($currentSubCategory->category->slug == 'cars'){
        
        $this->fuel = $this->ad->vehicle->fuel;
        $this->year = $this->ad->vehicle->year;
        $this->transmission = $this->ad->vehicle->transmission;
        $this->kilometer = $this->ad->vehicle->km_driven;

       }
       if($currentSubCategory->category->slug == 'properties'){
            $this->furnishing   =$this->ad->property->furnishing; 
            $this->bedroom      =$this->ad->property->bedroom;
            $this->bathroom     =$this->ad->property->bathroom;
            $this->status       =$this->ad->property->status;
            $this->postedBy     =$this->ad->property->postedBy;
            $this->parking      =$this->ad->property->parking;
            $this->length       =$this->ad->property->length;

       }
       
    
    }

    //Categories-subcategories-childCategories
    public function updatedSelectedCategory($category)
    {
        $this->subCategories = SubCategory::where('category_id', $category)->get();
        $this->selectedSubCategory = NULL;
        $this->showChildCategory($category);
        $this->hideExtraField();
        
    }

    public function updatedSelectedSubCategory($subCategory)
    {
        if (!is_null($subCategory)) {
            $this->subCategory = ChildCategory::where('sub_category_id', $subCategory)->get();
            $this->showChildCategory($subCategory);
            $this->showCategoryField($subCategory);
            
        }
        
    }

    //Country-State-City
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

  //display details based on category selected
    public function showCategoryField($category)
    {
        $subCategory = subCategory::findOrFail($category);
        $category = $subCategory->category->slug;
        //   $cars,$motorcycles,$houses,$offices,$lands_plots,$jobs_training;
        if($category == 'cars'){
            $this->cars = true;
            $this->motorcycles =false;
            $this->jobs_training=false;
            $this->houses=false;
            $this->offices=false;
            $this->lands_plots=false;
            return;
        }
        // if($category == 'motorcycles'){
        //     $this->motorcycles =true;
        //     $this->cars = false;
        //     $this->jobs_training=false;
        //     $this->houses=false;
        //     $this->offices=false;
        //     $this->lands_plots=false;
        //     return;
        // }
        if($category == 'jobs-training'){
            $this->jobs_training=true;
            $this->motorcycles =false;
            $this->cars = false;
            $this->houses=false;
            $this->offices=false;
            $this->lands_plots=false;
            return;
        }

        //specifying houses 
        if($subCategory->slug == 'for-sale-houses-apartments' || $subCategory->slug == 'for-rent-houses-apartments' ){
            $this->houses=true;
            $this->jobs_training=false;
            $this->motorcycles =false;
            $this->cars = false;
            $this->offices=false;
            $this->lands_plots=false;
            $this->resettingHouseProperties();
            return;
        }
        //specifying offices 
        if($subCategory->slug == 'for-rent-shops-offices' || $subCategory->slug == 'for-sale-shops-offices' ){
            $this->offices=true;
            $this->houses=false;
            $this->jobs_training=false;
            $this->motorcycles =false;
            $this->cars = false;
            $this->lands_plots=false;
            $this->resettingHouseProperties();
            return;
        }
        if($subCategory->slug == 'lands-plots' ){
            $this->lands_plots=true;
            $this->offices=false;
            $this->houses=false;
            $this->jobs_training=false;
            $this->motorcycles =false;
            $this->cars = false;
            $this->resettingHouseProperties();
            
            return;
        }
        
    }

    //display child categories having data
    public function showChildCategory($subCategoryId)
        {
            
            $subcategory = SubCategory::findOrFail($subCategoryId);
            if($subcategory->slug == 'computers-laptops'){
                return $this->showChildCategory=true;
            }else{
                $this->showChildCategory=false;
                $this->selectedChildCategory=null;
                $this->currentChildCategory=null;
            }
        }

    public function test()
    {dd(0);}

    //post Advertisements 
    public function updateAd()
    {
        
        // $this->validateAds();
        //getting the category selected
        $categoryObject=$this->getCategory();
       
        $SubCategoryObject =$this->getSubCategory();
        $childCategoryObject = $this->getChildCategory();

        $countryObject = $this->getCountry();
        $stateObject = $this->getState();
        $cityObject = $this->getCity();

       
        $adId = $this->ad->id;
        
        
      
        
        
        // $subCategory=$this->getSubCategory();
      

        
        if($categoryObject->slug == 'cars'){
           
                //validating common ads inputs
            // $this->validateAds();
            $this->validateCar();
            $this->updateData($categoryObject, $SubCategoryObject, $childCategoryObject, $countryObject, $stateObject, $cityObject);
            $this->insertCar($adId);
           
            // $this->insertImages($ads->id);
        }
        
        elseif($categoryObject->slug== 'properties'){
            // $this->validateAds();
            $this->updateData($categoryObject, $SubCategoryObject, $childCategoryObject, $countryObject, $stateObject, $cityObject);
            $this->insertProperties($adId);
            // $this->insertImages($ads->id);

        }
        else{
            // $this->validateAds();
            $this->updateData($categoryObject, $SubCategoryObject, $childCategoryObject, $countryObject, $stateObject, $cityObject);
            // $this->insertImages($ads->id);
        }
        // $this->inputAfterSubmission();
        $this->success_message='Article Edited Successfully';
        
    }
     //hide all the additional fields
     public function hideExtraField()
     {
         $this->houses=false;
         $this->jobs_training=false;
         $this->motorcycles =false;
         $this->cars = false;
         $this->offices=false;
         $this->lands_plots=false;
         return;
     }
        //remove image from upload form
    public function removePhoto($value)
    {
        if($value == 'photo0')
        return $this->photo0 = '';
        if($value == 'photo1')
        return $this->photo1='';
        if($value == 'photo2')
        return $this->photo2='';
        if($value == 'photo3')
        return $this->photo3 = '';
        if($value == 'photo4')
        return $this->photo4='';
        if($value == 'photo5')
        return $this->photo5='';

    }

    protected function validateAds()
    {
        return $this->validate([
            'selectedCategory' => 'required',
            'selectedSubCategory' => 'required',
            // 'selectedChildCategory' => 'required',
            'selectedCountry' => 'required',
            'selectedState' => 'required',
            'selectedCity' => 'required',
            'title' =>  'required',
            'currency' => 'required',
            'price' =>  'required',
            'description'   =>  'required',
            'photo0'    =>  'required'
        ]);
    }

    protected function validateCar()
    {
        return $this->validate([
            'year'          => 'required',
            'transmission'  =>  'required',
            'fuel'          =>  'required'
        ]);
    }

   
    public function insertCar($postId)
    {
        Vehicle::where('post_id',$postId)->update([
           
            'year'          =>  $this->year,
            'fuel'          =>  $this->fuel,
            'transmission'  =>  $this->transmission,
            'km_driven'     =>  $this->kilometer
        ]);
        
    }
    protected function validateHouse()
    {
       return $this->validate([
            'furnishing'    =>  'required',
            'bedroom'       =>  'required',
            'bathroom'      =>  'required',
            'status'        =>  'required',
            'postedBy'      =>  'required',
            'parking'       =>  'required'
        ]);
    }

    protected function insertProperties($postId)
    {
        Property::where('post_id',$postId)->update([
            
            'furnishing'    =>  $this->furnishing,
            'bedroom'       =>  $this->bedroom,
            'bathroom'      =>  $this->bathroom,
            'parking'       =>  $this->parking,
            'listed_by'     =>  $this->postedBy,
            'status'        =>  $this->status,
            'length'        =>  $this->length
        ]);
    }

    

    protected function getCategory()
    {
        $category = Category::where('id','=',$this->selectedCategory)->first();
        // $category = Category::findOrFail($this->selectedCategory);
        if($category ===null){

            return Category::where('category_name','=',$this->currentCategory)->first();
        }else{
            // dd($this->currentCategory);
            $category = Category::where('id','=',$this->selectedCategory)->first();
            return $category;
        }
        
      
    }

    protected function getSubCategory()
    {
        if($this->selectedSubCategory === null){
           $currentSubCategoryObject= SubCategory::where('sub_category_name','=',$this->currentSubCategory)->first();
           return $currentSubCategoryObject;
        }else{
            return SubCategory::where('id','=',$this->selectedSubCategory)->first();
        } 
    }
    protected function getChildCategory()
    {
        if($this->selectedChildCategory === null){
           $currentChildCategoryObject= ChildCategory::where('child_category_name','=',$this->currentChildCategory)->first();
           return $currentChildCategoryObject;
        }else{
            return ChildCategory::where('id','=',$this->selectedChildCategory)->first();
        } 
    }


    protected function getCountry()
    {
        $country = Country::where('id','=',$this->selectedCountry)->first();
        // $category = Category::findOrFail($this->selectedCategory);
        if($country ===null){

            return Country::where('name','=',$this->currentCountry)->first();
        }else{
            // dd($this->currentCategory);
            $country = Country::where('id','=',$this->selectedCountry)->first();
            return $country;
        }
        
      
    }

    protected function getState()
    {
        if($this->selectedState === null){
           $currentStateObject= State::where('name','=',$this->currentState)->first();
           return $currentStateObject;
        }else{
            return State::where('id','=',$this->selectedState)->first();
        } 
    }
    protected function getCity()
    {
        if($this->selectedCity === null){
           $currentCityObject= City::where('name','=',$this->currentCity)->first();
           return $currentCityObject;
        }else{
            return City::where('id','=',$this->selectedCity)->first();
        } 
    }

    protected function updateData($category, $subCategory, $childCategory, $country, $state, $city){
        $user = Auth::user();
        $id = $this->ad->id;
        if($childCategory == null){
            $ads = Advertisement::findOrFail($id)->update([
            
                'category_id'       => $category->id,
                'sub_category_id'   => $subCategory->id,
                'child_category_id' => null,
                'country_id'        => $country->id,
                'state_id'          => $state->id,
                'city_id'           => $city->id,
                'title'             => $this->title,
                'slug'              => $this->uniqueSlug($this->title),
                'currency'          => $this->currency,
                'price'             => $this->price,
                'price_status'      => $this->isNegotiable,
                'description'       => $this->description
            ]);
            return $ads;
        }else{
            $ads = Advertisement::findOrFail($id)->update([
            
                'category_id'       => $category->id,
                'sub_category_id'   => $subCategory->id,
                'child_category_id' => $childCategory->id,
                'country_id'        => $country->id,
                'state_id'          => $state->id,
                'city_id'           => $city->id,
                'title'             => $this->title,
                'slug'              => $this->uniqueSlug($this->title),
                'currency'          => $this->currency,
                'price'             => $this->price,
                'price_status'      => $this->isNegotiable,
                'description'       => $this->description
            ]);
            return $ads;
        }
      
    }

    protected function insertImages($postId)
    {
        if($this->photo0){
            if($new_name = $this->renameImage($this->photo0)){
                Image::findOrFail($postId)->update([
                   
                    'photo0'    => $new_name,
                ]);
            }
        }
        if($this->photo1){
            if($new_name = $this->renameImage($this->photo1)){
                Image::where('post_id','=',$postId)->update(['photo1' => $new_name]);    
            }
        }
        if($this->photo2){
            if($new_name = $this->renameImage($this->photo2)){
                Image::where('post_id','=',$postId)->update(['photo2' => $new_name]);    
            }
        }
        if($this->photo3){
            if($new_name = $this->renameImage($this->photo3)){
                Image::where('post_id','=',$postId)->update(['photo3' =>$new_name]);    
            }
        }
        if($this->photo4){
            if($new_name = $this->renameImage($this->photo4)){
                Image::where('post_id','=',$postId)->update(['photo4' => $new_name]);    
            }
        }
        if($this->photo5){
            if($new_name = $this->renameImage($this->photo5)){
                Image::where('post_id','=',$postId)->update(['photo5' => $new_name]);    
            }
        }
    }

    protected function renameImage($image)
    {
        $path='public/advertisement';
        $getExtension = $image->getClientOriginalExtension();
        $new_name = time().'.'.$getExtension;
        $image->storeAs($path, $new_name);
        return $new_name;
    }

    protected function resettingHouseProperties()
    {
        $this->furnishing=null;
        $this->bedroom=null;
        $this->bathroom=null; 
        $this->status=null;
        $this->postedBy=null;
        $this->parking=null;
    }

    protected function inputAfterSubmission()
    {
        //reset all inputs
        $this->reset();
        //reassigning values for foreach loop
        $this->categories = Category::all();
        $this->countries = Country::all();
    }
    
    protected function uniqueSlug($value)
    {
        
        $slug = Str::slug(strtolower($value), '-');
        $count = Advertisement::where('slug', 'LIKE', "{$slug}%")->count();
        $newCount = $count > 0 ? ++$count : '';
        return $newCount > 0 ? "$slug-$newCount" : $slug;

    }

    public function updateCategory()
    {
       $this->showCurrentCategory = ! $this->showCurrentCategory;
       $this->updateCategory   = ! $this->updateCategory;
       
    }

    public function updateLocation()
    {
       $this->showCurrentLocation = ! $this->showCurrentLocation;
       $this->updateLocation   = ! $this->updateLocation;
    }

    public function render()
    {
       
        
        return view('livewire.ads.edit-ad');
    }
}






  