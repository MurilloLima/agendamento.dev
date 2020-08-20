<?php

namespace App\Http\Controllers\Panel\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\AgendarClient;
use App\Models\Agenda;
use App\Models\Notification;
use App\Models\Profile;
use Illuminate\Support\Facades\Mail;

class AgendamentosController extends Controller
{
    public function index()
    {
        $profile = Profile::where('user_id', auth()->user()->id)->first();
        if ($profile->status == 1) {
            $data = Agenda::where('user_id', auth()->user()->id)->orderby('created_at', 'desc')->paginate();
            return view('panel.client.pages.agendamentos', compact('data'));
        } else {
            return redirect()->to('panel/client/profile/')->with('error', 'ATENÇÃO! Antes de solicitar um agendamento você deve atualizar todos os seus dados!');
        }
    }

    public function store(Request $request)
    {
        Notification::create([
            'user_id' => auth()->user()->id,
        ]);
        $data = Agenda::create($request->all());
        Mail::send(new AgendarClient($data));
        return redirect()->back()->with('success', 'Solicitação enviada com sucesso! Aguarde marcaremos a data e hora para a sua consulta.');
    }

    public function create()
    {
        return view('panel.client.pages.create');
    }
}
