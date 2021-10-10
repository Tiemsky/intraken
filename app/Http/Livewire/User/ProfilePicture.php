<?php

namespace App\Http\Livewire\User;

use Illuminate\Queue\Listener;
use Livewire\Component;

class ProfilePicture extends Component
{
    protected $listeners=['avatarUpdated' => 'mount'];

    public function mount()
    {
        
    }

    public function render()
    {
        return view('livewire.user.profile-picture');
    }
}
