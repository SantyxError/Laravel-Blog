@extends('plantilla')

@section('titulo', ' Listado posts')

 @section('contenido')
 <h1>Listado posts</h1>

 <ul>
    @forelse($posts as $post)
        <li>
          
            {{$post->titulo}} 
            
            
            ({{$post->autor->login}})  
            
            <a href="{{route('posts.show',$post)}}">Ver</a>
            <form action="{{route('posts.destroy',$post)}}"  method="POST">
                @method('DELETE')
                @csrf
                <button>Borrar</button>
            </form>
{{-- 
            <form action="{{route('posts.edit',$post)}}"  method="POST">
                @method('UPDATE')
                @csrf
                <button>Editar</button>
            </form> --}}

       
           
           <br><br>
        </li>
    @empty
        <li>No existen posts</li>
    @endforelse
    
 </ul>
 @endsection



    