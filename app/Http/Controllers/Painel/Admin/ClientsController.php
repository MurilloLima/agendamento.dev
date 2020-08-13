<?php

namespace App\Http\Controllers\Painel\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ClientsController extends Controller
{
    public function index()
    {
        $data = User::orderby('created_at', 'desc')->paginate();
        return view('admin.pages.clients', compact('data'));
        # code...
    }
}
