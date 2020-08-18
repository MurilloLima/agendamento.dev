<?php

namespace App\Http\Controllers\Panel\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Profile;

class AgendamentosController extends Controller
{
    public function index()
    {
        if (Profile::where('user_id', auth()->user()->id)->count() == 0) {
            return redirect()->to('panel/client/profile/')->with('error', 'ATENÇÃO! Antes de solicitar um agendamento você deve atualizar todos os seus dados!');
        } else {
            return view('panel.client.pages.agendamentos');
        }
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function create()
    {
        return view('panel.client.pages.create');
    }
}
