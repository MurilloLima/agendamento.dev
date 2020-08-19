<?php

namespace App\Http\Controllers\Panel\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Agenda;

class AgendamentosController extends Controller
{
    public function index()
    {
        $data = Agenda::orderby('created_at', 'desc')->paginate();
        return view('panel.admin.pages.agendamentos', compact('data'));
    }

    public function store(Request $request)
    {
        Agenda::create($request->all());
        return redirect()->back()->with('success', 'Agendamento de consulta realizada com sucesso.');
    }

    public function update($id, Request $request)
    {
        $data = Agenda::find($id);
        $data->update($request->all());
        return redirect()->back()->with('success', 'Agendamento de consulta realizada com sucesso.');
    }
}
