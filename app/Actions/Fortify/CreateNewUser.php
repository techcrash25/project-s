<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

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
            'names' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'document' => ['required', 'string', 'max:10'],
            'telephone' => ['required', 'string', 'max:10'],
            'password' => $this->passwordRules(),
        ])->validate();


        return User::create([
            'names' => $input['names'],
            'email' => $input['email'],
            'document' => $input['document'],
            'telephone' => $input['telephone'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
