@extends('layouts.plantilla')
@section("title", "Books | Listado")
@section("generos_libros")
    @foreach ($generos as $genero)
        <li><a class="dropdown-item" href="{{route('libros.index', $genero->genero)}}">{{$genero->genero}}</a></li>
    @endforeach
@endsection
@section('content')
{{-- <h1 class="text-center">Página para mostrar el listado de libros</h1> --}}
    {{$libros}}
    @if (count($libros)==0)
        <h1 class="text-center fw-bold">No se ha encontrado ningún artículo :(</h1>

        @section('footer-class', 'position-absolute bottom-0 w-100') {{-- Cambiamos los atributos del footer --}}
    @endif
@endsection