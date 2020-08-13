<?php

namespace App\Http\Controllers\Painel\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banco;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index()
    {
        $balace = auth()->user()->balance;
        $amount = $balace ? $balace->amount : 0;
        $bancos = Banco::select(DB::raw("id, CONCAT(cod,' - ',razao_social) as n"))->orderby('cod', 'asc')->pluck('n', 'id');
        return view('client.index', compact('bancos', 'amount'));
    }
    public function conteudos()
    {
        return view('client.pages.conteudo');
    }
    public function investimentos()
    {
        $data = [];
        return view('client.pages.investimentos', compact('data'));
    }
    public function ajuda()
    {
        return view('client.pages.ajuda');
    }
}
