<?php

namespace App\Http\Livewire\Ads;

use App\Models\Advertisement;
use App\Models\Category;
use App\Models\ChildCategory;
use Livewire\Component;
use App\Models\State;
use App\Models\Country;
use App\Models\City;
use App\Models\Image;
use App\Models\Property;
use App\Models\SubCategory;
use App\Models\Vehicle;
use Database\Seeders\SubCategorySeeder;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostAd extends Component
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
            $this->cities = City::where('state_id',$this->selectedState)->get();
            $this->selectedCity = $selectedCity;
            
                //Categories-subcategories-childCategories
                if (!is_null($selectedChildCategory)) {
                    $childCategory = ChildCategory::with('subCategory.category')->find($selectedChildCategory);
                    if ($childCategory) {
                        $this->childCategories = ChildCategory::where('sub_category_id', $childCategory->sub_category_id)->get();
                        $this->subCategories = SubCategory::where('category_id', $childCategory->subCategory->category_id)->get();
                        $this->selectedCategory = $childCategory->subCategory->category_id;
                        $this->selectedSubCategory = $childCategory->sub_category_id;
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

           
        
        }

        //Categories-subcategories-childCategories
        public function updatedSelectedCategory($category)
        {
            $this->subCategories = SubCategory::where('category_id', $category)->get();
            $this->selectedSubCategory = NULL;
            
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
                return $this->selectedChildCategory=null;
            }
        }

        //post Advertisements 
        public function postAd()
        {   $this->validateAds();
           //getting the category selected
            $category = $this->getCategory();
            $subCategory=$this->getSubCategory();

            
        
           
            if($category == 'cars'){
                 //validating common ads inputs
                $this->validateAds();
                $this->validateCar();
                $ads=$this->insertData();
                $this->insertCar($ads->id);
                $this->insertImages($ads->id);
            }
            
            elseif($category== 'properties'){
                $this->validateAds();
                $ads=$this->insertData();
                $this->insertProperties($ads->id);
                $this->insertImages($ads->id);

            }
            else{
                $this->validateAds();
                $ads=$this->insertData();
                $this->insertImages($ads->id);
            }
            $this->inputAfterSubmission();
            $this->success_message='New Article Added Successfully';
           
            
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
            Vehicle::create([
                'post_id'       =>  $postId,
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
            Property::create([
                'post_id'       =>  $postId,
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
            $category = Category::findOrFail($this->selectedCategory);
            return $category->slug;
        }

        protected function getSubCategory()
        {
            $subCategory = SubCategory::findOrFail($this->selectedSubCategory);
            return $subCategory->slug;   
        }

        protected function insertData(){
            $user = Auth::user();
            $ads = Advertisement::create([
                'user_id'           => $user->id,
                'category_id'       => $this->selectedCategory,
                'sub_category_id'   => $this->selectedSubCategory,
                'child_category_id' => $this->selectedChildCategory,
                'country_id'        => $this->selectedCountry,
                'state_id'          => $this->selectedState,
                'city_id'           => $this->selectedCity,
                'title'             => $this->title,
                'slug'              => $this->uniqueSlug($this->title),
                'currency'          => $this->currency,
                'price'             => $this->price,
                'price_status'      => $this->isNegotiable,
                'description'       => $this->description
            ]);
            return $ads;
        }

        protected function insertImages($postId)
        {
            $path='public/advertisement';
            if($this->photo0){
                $getExtension = $this->photo0->getClientOriginalExtension();
                $new_name = '100'.time().'.'.$getExtension;
                $this->photo0->storeAs($path, $new_name);
                Image::create(['post_id'=>$postId,'photo0'=>$new_name]);
            }
            if($this->photo1){
                $getExtension = $this->photo1->getClientOriginalExtension();
                $new_name = '101'.time().'.'.$getExtension;
                $this->photo1->storeAs($path, $new_name);
                Image::where('post_id','=',$postId)->update(['photo1' => $new_name]);
            }
            if($this->photo2){
                $getExtension = $this->photo2->getClientOriginalExtension();
                $new_name = '102'.time().'.'.$getExtension;
                $this->photo2->storeAs($path, $new_name);
                Image::where('post_id','=',$postId)->update(['photo2' => $new_name]);
            }
            if($this->photo3){
                $getExtension = $this->photo3->getClientOriginalExtension();
                $new_name = '103'.time().'.'.$getExtension;
                $this->photo3->storeAs($path, $new_name);
                Image::where('post_id','=',$postId)->update(['photo3' => $new_name]);

            }
            if($this->photo4){
                $getExtension = $this->photo4->getClientOriginalExtension();
                $new_name = '104'.time().'.'.$getExtension;
                $this->photo4->storeAs($path, $new_name);
                Image::where('post_id','=',$postId)->update(['photo4' => $new_name]);
               
            }
            if($this->photo5){
                $getExtension = $this->photo5->getClientOriginalExtension();
                $new_name = '105'.time().'.'.$getExtension;
                $this->photo5->storeAs($path, $new_name);
                Image::where('post_id','=',$postId)->update(['photo5' => $new_name]);

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
        public function render()
        {
            return view('livewire.ads.post-ad');
        }


}
