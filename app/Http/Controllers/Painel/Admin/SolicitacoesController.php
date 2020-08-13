<?php

namespace App\Http\Controllers\Painel\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Deposito;
use App\Models\Retirar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class SolicitacoesController extends Controller
{
    public function depositos()
    {
        $data = Deposito::orderby('created_at', 'desc')->paginate();
        return view('admin.pages.depositos', compact('data'));
    }

    public function retiradas()
    {
        $data = Retirar::orderby('created_at', 'desc')->paginate();
        return view('admin.pages.retiradas', compact('data'));
    }
}
