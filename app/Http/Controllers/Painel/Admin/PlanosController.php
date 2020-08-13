<?php

namespace App\Http\Controllers\Painel\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PlanosRequest;
use App\Models\Plano;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PlanosController extends Controller
{
    public function index()
    {
        $data = Plano::orderby('created_at', 'desc')->paginate();
        return view('admin.pages.planos', compact('data'));
    }

    public function store(PlanosRequest $request, Plano $plano)
    {
       $plano->create($request->all());
       return redirect()->back()->with('success', 'Plano cadastrado com sucesso');
    }

    public function update($id, PlanosRequest $request, Plano $plano){
        $plano->find($id)->update($request->all());
        return redirect()->back()->with('success', 'Editado com sucesso');
    }

    public function delete($id, Plano $plano){
        $plano->destroy($id);
        return redirect()->back()->with('success', 'Deletado com sucesso');
    }
}
