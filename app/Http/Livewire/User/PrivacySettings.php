<?php

namespace App\Http\Livewire\User;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PrivacySettings extends Component
{
    public $other_reason;
    public $reason;
    public function render()
    {
        return view('livewire.user.privacy-settings');
    }

    public function mount()
    {
       
    }


    public function deleteAccount()
    {
       
        dd('ok');
    }

    
}
