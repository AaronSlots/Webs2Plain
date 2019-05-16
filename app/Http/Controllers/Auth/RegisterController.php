<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname'     => ['bail','required', 'string','regex:/^[A-Z][a-z]+$/', 'max:255'],
            'prepositions'  => ['bail', 'nullable', 'string','regex:/^(?:[a-z]{2,}(?:[\ ][a-z]{2,})*)?$', 'max:255'],
            'lastname'      => ['bail','required', 'string','regex:/^[A-Z][a-z]+$/', 'max:255'],
            'country_iso'   => ['bail','required', 'string','regex:/^[A-Z]{2}$/'],
            'email'         => ['bail','required', 'string', 'email', 'max:255', 'unique:users'],
            'password'      => ['bail','required', 'string', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$^+=!*()@%&]).{8,255}$/', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'firstname'=>$data['firstname'],
            'prepositions'=>$data['prepositions'],
            'lastname'=>$data['lastname'],
            'country_iso'=>$data['country_iso'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password']),
        ]);
    }
}
