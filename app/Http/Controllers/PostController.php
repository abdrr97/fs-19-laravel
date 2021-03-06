<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // dump and die
        // dd(Post::all()); 
        // return 'Post Index page';
        // $posts = Post::all(); 
        // SELECT * FROM posts ORDER BY created_at DESC
        $posts = Post::orderBy('created_at', 'DESC')->get();
        // $posts = Post::latest()->get();
        // $posts = Post::where('title', 'LIKE', '%2%')->get();
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        // $post = Post::find($id);
        // abort_if($post == null, 200, "Serveur Tai7");
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }


    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // https://laravel.com/docs/8.x/validation#introduction
        $request->validate([
            'title' => 'required|string|min:6',
            'content' => 'required',
        ]);

        $post = new Post(); // post model instance
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return redirect()->route('posts.index');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|min:6',
            'content' => 'required',
        ]);

        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return redirect()->route('posts.index');
    }
}
