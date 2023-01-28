<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::orderBy('titulo', 'asc')
            ->paginate(5);
        return view('posts.index', compact('posts'));
        // return view('posts.index');
    }


    public function create()
    {

        return redirect()->route('home');
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {

        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }


    public function edit($id)
    {
        return redirect()->route('home');
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        Post::findOrFail($id)->delete();
        return redirect()->route('posts.index');
    }

    public function nuevaPrueba()
    {
        $num = rand();
        $post = new Post();
        $post->titulo = "Titulo " . $num;
        $post->contenido = "Contenido" . $num;
        $post->save();
        return redirect()->route('posts.index');
    }

    public function editarPrueba($id)
    {
        $num = rand();
        $postAModificar = Post::findOrFail($id);
        $postAModificar->titulo = "Otro título " . $num;
        $postAModificar->contenido = "Otro contenido " . $num;
        $postAModificar->save();
        return redirect()->route('posts.index');
    }
}
