<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Profile;
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
    protected $redirectTo = '/panel/client/';

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'date_nasc' => 'required',
            'idade' => 'required',
            'cpf' => 'required',
            'rg' => 'required',
            'peso' => 'required',
            'altura' => 'required',
            'endereco' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'cep' => 'required',
            'profissao' => 'required',
            'fone' => 'required',
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
        $data = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'date_nasc' => $data['date_nasc'],
            'idade' => $data['idade'],
            'cpf' => $data['cpf'],
            'rg' => $data['rg'],
            'peso' => $data['peso'],
            'altura' => $data['altura'],
            'endereco' => $data['endereco'],
            'bairro' => $data['bairro'],
            'cidade' => $data['cidade'],
            'cep' => $data['cep'],
            'profissao' => $data['profissao'],
            'fone' => $data['fone'],
        ]);
        Profile::create([
            'user_id' => $data->id
        ]);
        return $data;
    }
}
