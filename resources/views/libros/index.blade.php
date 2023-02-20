@extends('layouts.plantilla')
@section("title", "Books | Listado")
@section("generos_libros")
    @foreach ($generos as $genero)
        <li><a class="dropdown-item" href="{{route('libros.index', $genero->genero)}}">{{$genero->genero}}</a></li>
    @endforeach
@endsection
@section('content')
    {{$libros}};
    <h1 class="text-center">Página para mostrar el listado de libros</h1>
@endsection