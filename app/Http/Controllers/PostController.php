<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dump and die
        // dd(Post::all()); 
        // return 'Post Index page';
        // $posts = Post::all(); // SELECT * FROM posts

        $posts = Post::orderBy('created_at', 'DESC')->get();
        // $posts = Post::latest()->get();
        // $posts = Post::where('title', 'LIKE', '%2%')->get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $post = Post::findOrFail($id);
        // abort_if($post == null, 200, "Serveur Tai7");
        return $post;
    }
}
