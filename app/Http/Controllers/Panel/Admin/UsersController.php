<?php

namespace App\Http\Controllers\Panel\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UsersController extends Controller
{
    public function edit($id)
    {
        $data = User::find($id);
        return view('panel.admin.pages.user_edit', compact('data'));
    }

    public function delete($id)
    {
        User::destroy($id);
        return redirect()->back()->with('success', 'Cliente deletado com sucesso.');
    }
}
