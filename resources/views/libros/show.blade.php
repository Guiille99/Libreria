@extends('layouts.plantilla')
@section("title", "Books | Nombre del libro")
@section("generos_libros")
    @foreach ($generos as $genero)
        <li><a class="dropdown-item" href="{{route('libros.filter', $genero->genero)}}">{{$genero->genero}}</a></li>
    @endforeach
@endsection
@section('content')
{{$libro}}
    <h1>Página para mostrar un libro</h1>
@endsection