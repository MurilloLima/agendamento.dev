<?php

namespace App\Http\Controllers\Painel\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Retirar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class RetirarController extends Controller
{
   
    public function store(Request $request, Retirar $retirar)
    {
        $retirar->create([
            'user_id' => auth()->user()->id,
            'hash' => $request->get('hash'),
            'value' => $request->get('value')
        ]);
        return redirect()->back()->with('success', 'Solicitação de retirada enviada com sucesso, nossa equipe irá validar em breve');
    }
}
