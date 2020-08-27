<?php

namespace App\Http\Controllers\Panel\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FileRequest;
use App\Models\Comment;
use App\User;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user = User::find($id);
        $comments = $user->comments()->orderby('created_at', 'desc')->paginate();
        return view('panel.admin.pages.comments', compact('comments', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FileRequest $data)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FileRequest $data)
    {
        $file_extention = $data['file']->getClientOriginalExtension();
        $file_name = time() . rand(99, 999) . '.' . $file_extention;

        $data['file']->storeAs('upload', $file_name, 'public');
        Comment::create([
            'user_id' => $data['user_id'],
            'file' => $file_name,
            'comment' => $data['comment'],
        ]);
        return redirect()->back()->with('success', 'Observação enviada com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Comment::destroy($id);
        return redirect()->back()->with('success', 'Observação deletada com sucesso.');
    }
}
