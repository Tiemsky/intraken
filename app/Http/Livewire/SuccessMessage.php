<?php

namespace App\Http\Livewire;

use Livewire\Component;


class SuccessMessage extends Component
{
    public $success_message;
    public function render()
    {
        return view('livewire.success-message');
    }
}
