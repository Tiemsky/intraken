<?php

namespace App\Http\Livewire\User;

use App\Models\Profile;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSettings extends Component
{


    public $username;
    public $phone;
    public $profile;
    public $current_password;
    public $new_password;
    public $password_confirmation;
    public $country;
    public $state;
    public $city;

    public function mount()
    {
        $user = Auth::user();
        $this->username = $user->username;
        $this->phone = $user->profile->phone;
        $this->email = $user->email;
        $this->country = $user->profile->country;
        $this->state = $user->profile->state;
        $this->city = $user->profile->city;
        
    }

    public function render()
    {
        $user = Auth::user();
        $countries = DB::table("countries")->pluck("name","id");
        return view('livewire.user.user-settings',['countries' => $countries]);
    }

    public function submitInfo()
    {
        $this->validate([
            'username' => 'required|min:3',
            
        ]);

        $user_id = Auth::user()->id;
        User::findOrFail($user_id)->update(['username' => $this->username]);
        Profile::where('user_id', $user_id)->update(['phone' =>$this->phone]);
        return session()->flash('success', __('User info updated successfully.'));
       
    }

    

    protected function passwordValidation()
    {
        $this->validate([
            'current_password' =>'required',
            'new_password' => 'required',
            'password_confirmation' =>'required|same:new_password'
        ]);
    }


    public function updatePassword()
    {
        $this->passwordValidation();
        $user = Auth::user();
        if(!(Hash::check($this->current_password, $user->password))){
            $this->cleanPasswordForm();
            return session()->flash('current_password_failed', __('The current password do not match our record.'));
            }
            $updatedPassword = Hash::make($this->new_password);
            User::findOrFail($user->id)->update([
                'password' => $updatedPassword
            ]);
        $this->cleanPasswordForm();
        return session()->flash('success', __('Password updated successfully!'));
        
      
    }

    public function submitAddress()
    {
        // $this->validate([
        //     'country' =>'required',
        //     'state'=>'required',
        //     'city'=>'required'
        // ]);

        $address = [
            'country' => getCountryName($this->country),
            'state' => getStateName($this->state),
            'city' => getCityName($this->city),
        ];
       
        Profile::where('user_id', Auth::user()->id)->update($address);

    }

    protected function cleanPasswordForm()
    {
        $this->current_password='';
        $this->new_password='';
        $this->password_confirmation='';
    }

    protected $rules = [
        'current_password' => 'required|min:6',
        'new_password' => 'required',
        'password_confirmation' => 'required|same:new_password',
        'country' =>'required',
        'state'=>'required',
        'city'=>'required'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    
}
