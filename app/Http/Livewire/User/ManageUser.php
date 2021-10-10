<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class ManageUser extends Component
{
    public $success_message;
    public function render()
    {
        return view('livewire.user.manage-user');
    }
}
