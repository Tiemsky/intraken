<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Illuminate\Support\Facades\Request;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */

     
    public function create(array $input)
    {
        Validator::make($input, [
            'username' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'phone.*' => ['required','min:8','unique:users,phone'],
            'licence' => 'required|',
            'password' => $this->passwordRules(),
        ])->validate();

        $phone = $input['phone'];            
            
        return User::create([
            'username' => $input['username'],
            'phone' => $phone['full'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

       
    }


}
