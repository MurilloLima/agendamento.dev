<?php

namespace App\Http\Controllers\Panel\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\AgendarAdmin;
use App\Models\Agenda;
use App\Models\Notification;
use Illuminate\Support\Facades\Mail;

class AgendamentosController extends Controller
{
    public function index()
    {
        $data = Agenda::orderby('created_at', 'desc')->paginate();
        return view('panel.admin.pages.agendamentos', compact('data'));
    }

    public function store(Request $request)
    {
        $data = Agenda::create($request->all());
        Mail::send(new AgendarAdmin($data));
        return redirect()->back()->with('success', 'Agendamento de consulta realizada com sucesso.');
    }

    public function update($id, Request $request)
    {
        $data = Agenda::find($id);
        $data->update($request->all());
        Mail::send(new AgendarAdmin($data));
        return redirect()->back()->with('success', 'Agendamento de consulta realizada com sucesso.');
    }

    public function notificatonDelete($id)
    {
        Notification::destroy($id);
        return redirect()->to('/panel/admin/agendamentos');
    }
}
