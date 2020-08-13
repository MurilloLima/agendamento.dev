<?php

namespace App\Http\Controllers\Painel\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MoneyRequest;
use App\Models\Balance;
use App\Models\Historic;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class BalanceController extends Controller
{
    public function index()
    {
        dd(auth()->user());
    }

    public function historic()
    {
        $data = Historic::where('user_id', auth()->user()->id)->orderby('created_at', 'desc')->paginate();
        return view('client.pages.historic', compact('data'));
    }
}
