@extends('plantilla')

@section('titulo', ' Listado posts')

 @section('contenido')
 <h1>Listado posts</h1>

 <ul>
    @forelse($posts as $post)
        <li>
            {{$post->titulo}}   <a href="{{route('posts.show',$post)}}">Ver</a>
        </li>
    @empty
        <li>No existen posts</li>
    @endforelse
    
 </ul>
 @endsection

    