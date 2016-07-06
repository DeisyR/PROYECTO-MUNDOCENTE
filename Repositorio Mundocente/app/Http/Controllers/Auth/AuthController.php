<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = 'indexD';
    //protected $username = 'name';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
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
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ],[
            'name.required' => 'Debe digitar el nombre',
            'name.max' => 'El nombre tiene una maximo 255 caracteres',
            'lastname.required'  => 'Debe digitar el apellido',
            'lastname.max' => 'El nombre tiene una maximo 255 caracteres',
            'email.required'  => 'Debe digitar el correo',
            'email.max' => 'El correo tiene una maximo 255 caracteres',
            'email.unique' => 'El correo ya existe',
            'password.required'  => 'Debe digitar la contraseña',
            'password.min' => 'La contraseña debe ser de minimo 6 caracteres',
            'password.confirmed' => 'Debe confirmar la contraseña',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        //dd($data);
        return User::create([
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            //'password' => $data['password'],
            'password' => bcrypt($data['password']),
            'type_person' => $data['type_person'],

        ]);
    }
}
