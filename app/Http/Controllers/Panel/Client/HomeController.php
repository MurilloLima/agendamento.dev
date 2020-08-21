<?php

namespace App\Http\Controllers\Panel\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        return view('panel.client.index');
    }
}
