
{{-- Plantilla que utiliza --}}
@extends('plantilla')

{{-- Trozo de codigo para el titulo. En este caso indicamos que en 'title' pondremos 'home' --}}
@section('title', 'home')


{{-- Trozo de codigo que reutilizamos. En este caso cogemos el 'nav' de la carpeta 'partials' --}}
@section('partials.nav')

@section('contenido')
<h1>HOME</h1>

{{-- cerramos seccion --}}
@endsection