<?php

namespace App\Http\Controllers\Panel\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('panel.admin.pages.profile');
    }

    public function update(ProfileRequest $request)
    {
        auth()->user()->update($request->all());
        return redirect()->back()->with('success', 'Perfil atualizado com sucesso.');
    }
}
