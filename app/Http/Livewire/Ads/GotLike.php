<?php

namespace App\Http\Livewire\Ads;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class GotLike extends Component
{
    public $like;
    public $gotLike;
    

   

  
    public function render()
    {
        
        return view('livewire.ads.got-like');
    }
}
