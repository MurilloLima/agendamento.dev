<?php

namespace App\Http\Controllers\Painel\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;

class BlogController extends Controller
{

    public function index()
    {
        $data = Blog::orderby('created_at', 'desc')->paginate();
        return view('admin.pages.blog.index', compact('data'));
    }
    public function create()
    {
        return view('admin.pages.blog.create');
    }

    public function store(BlogRequest $blogRequest, Blog $blog)
    {
        $blog->title = $blogRequest->get('title');
        $blog->slug = Str::slug($blogRequest->get('title'));
        $blog->desc = $blogRequest->get('desc');
        $blog->content = $blogRequest->get('content');
        $blog->user_id = auth()->user()->id;

        if ($blogRequest->hasFile('img')) {
            $file = $blogRequest->file('img');
            $image = Image::make($file);
            $img = $image->resize(770, 445);
            $timestamp = str_replace(' ', '_', $blogRequest->img->getClientOriginalName());
            $name = $timestamp . '.' . $file->getClientOriginalExtension();
            $blog->img = $name;
            $img->save(public_path('upload/') . $name, 100);
        }
        $blog->save();
        return redirect()->back()->with('success', 'Cadastrado com sucesso');
    }

    public function edit($id, Blog $blog)
    {
        $data = $blog->find($id);
        return view('admin.pages.blog.edit', compact('data'));
    }

    public function update($id, BlogRequest $blogRequest, Blog $blog)
    {
        $data = $blog->find($id);
        $data->title = $blogRequest->get('title');
        $data->slug = Str::slug($blogRequest->get('title'));
        $data->desc = $blogRequest->get('desc');
        $data->content = $blogRequest->get('content');
        $data->user_id = auth()->user()->id;

        if ($blogRequest->hasFile('img')) {
            $file = $blogRequest->file('img');
            $image = Image::make($file);
            $img = $image->resize(770, 445);
            $timestamp = str_replace(' ', '_', $blogRequest->img->getClientOriginalName());
            $name = $timestamp . '.' . $file->getClientOriginalExtension();
            $data->img = $name;
            $img->save(public_path('upload/') . $name, 100);
        }
        $data->save();
        return redirect()->back()->with('success', 'Editado com sucesso');
    }
    public function delete($id, Blog $blog)
    {
        $blog->destroy($id);
        return redirect()->back()->with('success', 'Deletado com sucesso');
    }
}
