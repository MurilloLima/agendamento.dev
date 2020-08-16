<?php

namespace App\Http\Controllers\Panel\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgendamentosController extends Controller
{
    public function index()
    {
       return view('panel.admin.pages.agendamentos');
    }
}
