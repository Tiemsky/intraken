<?php

namespace App\Http\Livewire\Ads;

use App\Models\Advertisement;
use App\Models\Property;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Component;

class ShowAd extends Component
{
    public $slug;
    public $showNumber=false;
    public $showLogin=false;
    public $properties_details;
    public $car_details;
    public $like;
    public $gotLike;
    public function like($ad_id)
    {
        if(Auth::check()){
            $user = Auth::user();
            $user->likes()->attach($ad_id);
        }
    }

    public function disLike($ad_id){
        if(Auth::check()){
            $user = Auth::user();
            $user->likes()->detach($ad_id);
        }
    }

    public function likeChecker($user_id, $ad_id){
       return DB::table('advertisement_like')
            ->where('user_id', $user_id)
            ->where('advertisement_id', $ad_id)
            ->get();
           
    }

    public function showNumber()
    {
        $this->showNumber = !$this->showNumber;;
    }
    public function contactSeller(){
        if(!Auth::user()){
            $this->showLogin=true;
        }
        
    }

    public function showUserAd($id){
        // $user = User::where('id',$id)
        //         ->first();
        
        // $username = Str::slug($user->username);
        // dd($username);
        return redirect()->route('ad.postedByUser',[app()->getLocale(), $id]);
    }

    public function render()
    {
      
        $ad = Advertisement::with(['image','category','subCategory','city','state','country'])
                                    ->where('slug','=',$this->slug)
                                    ->first();
        $similar_ads = Advertisement::take(6)
                                    ->latest()
                                    ->with(['image','category','subCategory','city','state','country'])
                                    ->where('id','!=',$ad->id)
                                    ->where('category_id',$ad->category_id)
                                    ->get();

        if($ad->category->slug == 'properties'){
                $this->properties_details = Property::where('post_id',$ad->id)->first();
                $properties_details=$this->properties_details;
                return view('livewire.ads.show-ad', compact('ad','properties_details','similar_ads'));
            }
        if($ad->category->slug == 'cars'){
                $this->car_details = Vehicle::where('post_id',$ad->id)->first();
                $car_details=$this->car_details;
                return view('livewire.ads.show-ad',compact('ad','car_details','similar_ads'));
            }else{
                return view('livewire.ads.show-ad',compact('ad','similar_ads'));
                }
    }
}
