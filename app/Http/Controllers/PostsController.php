<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class PostsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('backEnd.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Post::create($request->all());

        Session::flash('message', 'Post added!');
        Session::flash('status', 'success');

        return redirect('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('backEnd.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('backEnd.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $post = Post::findOrFail($id);
        $post->update($request->all());

        Session::flash('message', 'Post updated!');
        Session::flash('status', 'success');

        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        $post->delete();

        Session::flash('message', 'Post deleted!');
        Session::flash('status', 'success');

        return redirect('posts');
    }

}
