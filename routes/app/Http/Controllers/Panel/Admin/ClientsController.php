<?php

namespace App\Http\Controllers\Panel\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ClientsController extends Controller
{
    public function index()
    {
        $data = User::orderby('created_at', 'desc')->paginate();
        return view('panel.admin.pages.clients', compact('data'));
    }
}