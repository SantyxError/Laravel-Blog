@extends('plantilla')

@section('titulo', ' Ficha post')

@section('partials.nav')

@section('contenido')
<h1>Ficha del post {{$post->id}}</h1>
<h3>{{$post->titulo}}</h3>
<p>{{$post->contenido}}</p>
<p></p>

@endsection


    