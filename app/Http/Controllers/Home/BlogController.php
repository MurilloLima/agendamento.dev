<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogController extends Controller
{
    public function view($slug)
    {
        $sidebar = Blog::latest()->take(2)->get();
        $data = Blog::where('slug', $slug)->first();
        return view('home.pages.blog_view', compact('data', 'sidebar'));
    }

    public function search(Request $request)
    {
        $sidebar = Blog::latest()->take(2)->get();
        $data = Blog::where('title', 'like', '%' . $request->get('value') . '%')->paginate();
        return view('home.pages.blog', compact('data', 'sidebar'));
    }
}
