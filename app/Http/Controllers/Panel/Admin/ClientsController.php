<?php

namespace App\Http\Controllers\Panel\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Barryvdh\DomPDF\PDF;

class ClientsController extends Controller
{
    public function index()
    {
        $data = User::orderby('created_at', 'desc')->paginate();
        return view('panel.admin.pages.clients', compact('data'));
    }

    public function view($id)
    {
        $data = User::find($id);
        $pdf = \PDF::loadView('pdf.view', compact('data'));
        return $pdf->stream();
    }

    public function search(Request $request)
    {
        $value = $request->get('value');
        $data = User::where('name', 'like', '%' . $value . '%')->orderby('created_at', 'desc')->paginate();
        return view('panel.admin.pages.clients', compact('data'));
    }
}
