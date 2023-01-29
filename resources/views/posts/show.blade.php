@extends('plantilla')

@section('titulo', ' Ficha post')

@section('partials.nav')

@section('contenido')

{{-- TITULO --}}
<h1>Ficha del post {{$post->id}}</h1>
<h3>{{$post->titulo}}</h3>
{{-- CONTENIDO --}}
<p>{{$post->contenido}}</p>
<p></p>


{{-- BOTON DE BORRAR POST --}}
<form action="{{ route('posts.destroy', $post->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" class="btn btn-danger" value="Eliminar post" />
</form>


{{-- COMENTARIOS --}}
<br><br>
<h3>Comentarios:</h3>

 @foreach($post->comentarios as $comentario) 
<div>
    <div>{{ $comentario->contenido }}</div>
    <footer>
        {{$comentario->autor->login}},
        {{ Carbon\Carbon::parse($comentario->created_at)->format('d/m/y') }}
    </footer>
</div>
<br>
@endforeach 

@endsection


    