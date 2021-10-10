<?php

namespace App\Http\Livewire\Ads;

use Livewire\Component;
use helper;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Like extends Component
{
    public $ad_id;
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

    
    public function render()
    {
        return view('livewire.ads.like');
    }
}
