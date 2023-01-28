@extends('plantilla')

@section('titulo', ' Ficha post')

@section('partials.nav')

@section('contenido')
<h1>Ficha del post {{$post->id}}</h1>
<h3>{{$post->titulo}}</h3>
<p>{{$post->contenido}}</p>
<p></p>

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


    