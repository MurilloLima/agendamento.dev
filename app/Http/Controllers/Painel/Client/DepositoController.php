<?php

namespace App\Http\Controllers\Painel\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DepositoRequest;
use App\Models\Deposito;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\ImageManagerStatic as Image;

class DepositoController extends Controller
{
    
    public function store(DepositoRequest $request, Deposito $deposito)
    {
        $deposito->value = $request->get('value');
        $deposito->user_id = auth()->user()->id;
        
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $image = Image::make($file);
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $name = $timestamp . '.' . $file->getClientOriginalExtension();
            $deposito->file = $name;
            $image->save(public_path('upload/depositos/') . $name, 100);
        }
        $deposito->save();
        return back()->with('success', 'Deposito enviado com sucesso, aguarde nossa equipe irá validar seu deposito.');
    }
}
