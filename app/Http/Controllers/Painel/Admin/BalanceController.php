<?php

namespace App\Http\Controllers\Painel\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MoneyRequest;
use App\Models\Deposito;
use App\Models\Historic;
use App\Models\Retirar;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class BalanceController extends Controller
{

    public function store($id, MoneyRequest $request, Deposito $deposito)
    {
        $user = User::find($request->get('user_id'));
        $value = $request->get('value');
        $balance = $user->balance()->firstOrCreate([]);
        $response = $balance->deposit($value, $user);

        if ($response['success'])
            $deposito->where('id', $id)->update(['status' => 'Aprovado']);
        return redirect()->back()->with('success', $response['message']);

        return redirect()->back()->with('error', $response['message']);
    }

    public function retirar($id, MoneyRequest $request, Retirar $retirar)
    {
        $user = User::find($request->get('user_id'));
        $value = $request->get('value');
        $balance = $user->balance()->firstOrCreate([]);
        $response = $balance->retirar($value, $user);

        if ($response['success'])
            $retirar->where('id', $id)->update(['status' => 'Aprovado']);
        return redirect()->back()->with('success', $response['message']);

        return redirect()->back()->with('error', $response['message']);
    }

    public function historic($id)
    {
        $data = Historic::where('user_id', $id)->orderby('created_at', 'desc')->paginate();
        $user = User::find($id);
        return view('admin.pages.historic', compact('data', 'user'));
    }
}
