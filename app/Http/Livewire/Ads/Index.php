<?php

namespace App\Http\Livewire\Ads;

use Livewire\Component;
use App\Models\Advertisement;
use helper;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    public function render()
    {
        $ads = Advertisement::latest()->with('category','city','state','country','image')->take(5)->get();
        return view('livewire.ads.index',compact('ads'));
    }
}
