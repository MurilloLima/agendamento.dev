<?php

namespace App\Http\Controllers\Panel\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('panel.admin.pages.profile');
    }

    public function update($id, Request $data)
    {
        $user = User::find($id);
        $file_extention = $data['img']->getClientOriginalExtension();
        $file_name = time() . rand(99, 999) . '.' . $file_extention;

        $data['img']->storeAs('upload', $file_name, 'public');
        $user->update([
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
            'img' => $file_name
        ]);
        return redirect()->back()->with('success', 'Perfil atualizado com sucesso.');
    }

}
