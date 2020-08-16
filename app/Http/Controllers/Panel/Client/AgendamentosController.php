<?php

namespace App\Http\Controllers\Panel\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgendamentosController extends Controller
{
    public function index()
    {
        return view('panel.client.pages.agendamentos');
    }

    public function store(Request $request)
    {
    
    }
}
