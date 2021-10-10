<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;
use Livewire\Component;

class Profile extends Component
{
    use WithFileUploads;
    public $username;
    public $email;
    public $phone;
    public $userAvatar;
    public $photo;
    public $current_password;
    public $new_password;
    public $confirm_password;
    public $success_message;
    public $error_message;
    public function mount()
    {
        $user = Auth::user();
        $this->username = $user->username;
        $this->email = $user->email;
        $this->phone = $user->phone;
        $this->userAvatar = $user->photo;
    }
    public function updateProfile()
    {
        $old_password = Auth::user()->password;
        $current_password = $this->current_password;
        
        $this->validate([
            'username'=>'required',
            'email' =>'required',
            'phone'=>'required'
        ]);
        
        if($this->current_password){
            $this->validate([
                'current_password'=>'required',
                'new_password'=>'required',
                'confirm_password'=>'required|same:new_password'
            ]);
            if(!Hash::check($current_password, $old_password)){
               return $this->success_message='Password Not Match!';
            }
            else{
                $new_password = Hash::make($this->new_password);
                $this->changePassword($new_password);
                $this->current_password='';
                $this->new_password='';
                $this->confirm_password='';
                }
        }
       
       
        if($this->photo){
            if($new_name = $this->renameImage($this->photo)){
                User::findOrFail(Auth::user()->id)->update([
                    'username'=>$this->username,
                    'phone'=>$this->phone,
                    'photo'=>$new_name
                ]);
                $this->photo='';
                $this->emit('avatarUpdated');
            }
        }else{
            User::findOrFail(Auth::user()->id)->update([
                'username'=>$this->username,
                'phone'=>$this->phone,
                'photo'=>null
            ]);
        }
        $this->success_message='Profile Edited successfully!';
    
}
    protected function changePassword($new_password){
    
        User::findOrFail(Auth::user()->id)->update([
            'password'=>$new_password
        ]);
    }
    protected function renameImage($image)
        {
            
            $user=User::findOrFail(Auth::user()->id);
            
            $path='public/users';
          
            if($user->photo  && $path.'/'.$user->photo){
                unlink('storage/users/'.$user->photo);
            }
            $getExtension = $image->getClientOriginalExtension();
            $new_name = time().'.'.$getExtension;
            $image->storeAs($path, $new_name);
            return $new_name;
        }
    public function removePhoto($value)
    {
        if($value == 'photo')
        return $this->photo = '';
    }
    public function render()
    {
        return view('livewire.user.profile');
    }
}
