<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('post');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $user = $request->user();
        $post = new Post;
        $post ->title = $request->title;
        $post ->body = $request->body;
        $user->post()->save($post);
        return redirect(route('post_index')) -> with('success', 'Post created successfully');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('postedit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post ->title = $request->title;
        $post ->body = $request->body;
        $post->save();
        return redirect(route('dashboard')) -> with('success', 'Post Updated !!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::destroy($id);
        return redirect(route('dashboard')) -> with('success', 'Post Deleted !!');

    }
}
