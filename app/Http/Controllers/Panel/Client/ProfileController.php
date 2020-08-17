<?php

namespace App\Http\Controllers\Panel\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\User;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('panel.client.pages.profile');
    }

    public function store(Request $request)
    {
        $user = User::find($request->user_id);
        $user->update($request->all());
        if(User::where('id', auth()->user()->id)->count() == 0){
            Profile::create($request->all());
        }
        return redirect()->back()->with('success', 'Seus dados foram atualizados com sucesso!');
    }
}
