<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        if (Auth::check()) {
            Auth::logout();
            return view('home.index');
        }
    }
    public function index()
    {
        return view('home.index');
    }

    public function sobre()
    {
        return view('home.pages.sobre');
    }
    public function funciona()
    {
        return view('home.pages.como-funciona');
    }

    public function seguranca()
    {
        return view('home.pages.seguranca');
    }

    public function vantagens()
    {
        return view('home.pages.vantagens');
    }

    public function encontre()
    {
        return view('home.pages.encontre-escritorio');
    }

    public function ouvidoria()
    {
        return view('home.pages.ouvidoria');
    }

    public function contatos()
    {
        return view('home.pages.contatos');
    }

    public function blog(Blog $blog)
    {
        $sidebar = Blog::latest()->take(2)->get();
        $data = $blog->orderby('created_at', 'desc')->paginate();
        return view('home.pages.blog', compact('data','sidebar'));
    }

    public function lucas()
    {
        return view('home.pages.lucas');
    }


    public function artigos()
    {
        return view('home.pages.artigos');
    }

    public function analises()
    {
        return view('home.pages.analises');
    }

    public function trabalhe()
    {
        return view('home.pages.trabalhe-conosco');
    }
}
