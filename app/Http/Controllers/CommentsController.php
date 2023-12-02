<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::all();
        return view('', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'content' => ['string', 'required', 'max:255'],
            'product_id' => ['required', 'integer', 'exists:products,id'],
            'post_id' => ['required', 'integer', 'exists:posts,id'],
        ]);
        $comment = new Comment();
        $comment->content = $request['content'];
        $comment->user_id = Auth::id();
        $comment->product_id = $request->product_id;
        $comment->post_id = $request->post_id;
        $comment->save();

        return redirect()->to('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        return view('', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'content' => ['string', 'required', 'max:255'],
        ]);
        $comment->content = $request['content'];
        $comment->update();

        return redirect()->to('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        Comment::destroy($comment->id);
        return back();
    }

     /**
     * Update the specified resource in storage.
     */
    public function updateStatus(Request $request, Comment $comment)
    {
        $comment->status = $request['status'];
        $comment->update();

        return redirect()->to('index');
    }
}
