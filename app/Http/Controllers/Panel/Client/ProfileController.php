<?php

namespace App\Http\Controllers\Panel\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ProfileController extends Controller
{
    private $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function profile()
    {
        return view('panel.client.pages.profile');
    }


    public function user(Request $request)
    {
        auth()->user()->update([
            "name" => $request->get('name'),
            "date_nasc" => $request->get('date_nasc'),
            "cpf" => $request->get('cpf'),
            "idade" => $request->get('idade'),
            "rg" => $request->get('rg'),
            "peso" => $request->get('peso'),
            "altura" => $request->get('altura'),
            "endereco" => $request->get('endereco'),
            "bairro" => $request->get('bairro'),
            "cidade" => $request->get('cidade'),
            "cep" => $request->get('cep'),
            "profissao" => $request->get('profissao'),
            "fone" => $request->get('fone'),
            "email" => $request->get('email'),
        ]);
        return redirect()->back()->with('success', 'Seus dados foram atualizados com sucesso!');
    }
}
