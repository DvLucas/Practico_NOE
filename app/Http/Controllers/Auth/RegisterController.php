<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
        return Validator::make($data, 
        [
            'name' => ['required', 'string', 'min:3' ,'max:255'],
            'surname' => ['required', 'string','min:3', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users', 'regex:/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], 
        $message =
        [
            'name.required' => 'Debe completar con su nombre',
            'tring' => 'Debe ingresar solo letras',
            'min' => 'El campo debe tener como minimo :min letras',
            'max' => 'El campo debe tener como máximo :max letras',
            'surname.required' => 'Debe completar con su apellido',
            'email.required' => 'Debe ingresar su e-mail',
            'email' => 'El e-mail ingresado es invalido',
            'regex' => 'El e-mail ingresado no es valido',
            'unique' => 'El e-mail ya esta registrado',
            'password.required' => 'Debe ingresar una contraseña',
            'password.min' => 'Tu contraseña debe tener al menos :min caracteres',
            'confirmed' => 'La contraseña de verificación no coincide',
           
            
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
            'name' => $data['name'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'id_rol' => 2,
            'password' => Hash::make($data['password']),
        ]);
    }
}
