<?php

namespace App\Http\Livewire\Ads;

use App\Models\Advertisement;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class FavoriteAds extends Component
{
    public $deleteId;  
    public function deleteId($id)
    {
        $this->deleteId = $id;
    }
  
    public function deleteFavoriteAd(){
        if(Auth::check()){
            $user = Auth::user();
            $user->likes()->detach($this->deleteId);
        }
    }
    
    public function render()
    {
        $ads = Advertisement::whereHas('likes')->with('image','category')->get();
        return view('livewire.ads.favorite-ads',compact('ads'));
    }
}
