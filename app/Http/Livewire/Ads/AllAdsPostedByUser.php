<?php

namespace App\Http\Livewire\Ads;

use App\Models\Advertisement;
use Livewire\Component;

class AllAdsPostedByUser extends Component
{
    public $user_id;
    public function render()
    {
        $ads = Advertisement::latest()->with('image','category','country','state','city')
                            ->where('user_id', $this->user_id)->get();
        return view('livewire.ads.all-ads-posted-by-user',compact('ads'));
    }
}
