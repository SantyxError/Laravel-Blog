<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Comentario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(
            'auth',
            ['except' => ['index', 'show']]
        );
    }


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

    //el método store se encargará de recoger los datos de la petición a través del parámetro Request de dicho método
    public function store(Request $request)
    {
        $post = new Post();
        $post->titulo = $request->get('titulo');
        $post->contenido = $request->get('contenido');
        $post->usuario()->associate(User::get()->first());
        $post->save();

        return redirect()->route('posts.index');
    }


    public function show($id)
    {

        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }


    public function edit($id)
    {
        $post = Post::findOrFail($id);
        if (Auth::user()->id != $post->usuario->id && Auth::user()->rol != 'admin')
            return redirect()->route('posts.index');
        else
            return view('posts.edit', compact('post'));
    }


    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        if (Auth::user()->id != $post->usuario->id && Auth::user()->rol != 'admin')
            return redirect()->route('posts.index');
        else {
            $post->titulo = $request->get('titulo');
            $post->contenido = $request->get('contenido');
            $post->save();

            return redirect()->route('posts.show', $id);
        }
    }


    public function destroy($id)
    {

        // En el caso de que hayas
        // hecho el ejercicio opcional de la sesión anterior para añadir comentarios a los posts, deberás
        // previamente eliminar todos los comentarios asociados a ese post, y después borrar el post. Para filtrar
        // los comentarios de un post y borrarlos, utiliza la cláusula where que se explicó en la sesión 4:
        Comentario::where('post_id', $id)->delete();
        Post::findOrFail($id)->delete();
        return redirect()->route('posts.index');
    }

    public function nuevaPrueba()
    {
        $num = rand();
        $min = 1;
        $max = 2;
        $numAutor = rand($min, $max);
        $post = new Post();
        $post->titulo = "Titulo " . $num;
        $post->contenido = "Contenido" . $num;
        $post->autor_id = $numAutor;
        $post->save();
        return redirect()->route('posts.index');
    }

    public function editarPrueba($id)
    {
        $min = 1;
        $max = 2;
        $numAutor = rand($min, $max);
        $num = rand();
        $postAModificar = Post::findOrFail($id);
        $postAModificar->titulo = "Otro título " . $num;
        $postAModificar->contenido = "Otro contenido " . $num;
        $postAModificar->autor_id = $numAutor;
        $postAModificar->save();
        return redirect()->route('posts.index');
    }
}
