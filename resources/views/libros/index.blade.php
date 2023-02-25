@extends('layouts.plantilla')
@section("title", "Books | Listado")
@section("generos_libros")
    @foreach ($generos as $genero)
        <li><a class="dropdown-item" href="{{route('libros.filter', $genero->genero)}}">{{$genero->genero}}</a></li>
    @endforeach
@endsection
@section('content')
{{-- <h1 class="text-center">Página para mostrar el listado de libros</h1> --}}

    @if (count($libros)==0)
    <h1 class="text-center fw-bold">No se ha encontrado ningún artículo :(</h1>
    @section('footer-class', 'position-absolute bottom-0 w-100') {{-- Cambiamos los atributos del footer --}}
    @else

    <div class="row mt-5">
        <div class="title__container">
            <h1 class="text-center">Libros de {{$filtro}}</h1>
        </div>
        <div class="recomendados__container col-6 col-md-10 m-auto">
            <div class="libros__container mt-3">
                @foreach ($libros as $libro)
                <div class="card">
                    <figure class="m-0">
                       <a href="{{route('libros.show', $libro)}}"><img src="{{asset($libro->portada)}}" alt="{{$libro->titulo}}" class="img-fluid"></a> 
                    </figure>
                    <div class="libro__info">
                        <h4 class="libro__titulo" title="{{$libro->titulo}}">{{$libro->titulo}}</h4>
                        <p class="libro__autor">{{$libro->autor}}</p>
                        <p class="libro__precio">{{$libro->precio}}€</p>
                        {{-- <button class="boton">Comprar</button> --}}
                        <form action="" method="get">
                            @csrf
                            @if (Auth::check()) {{-- Si hay una sesión iniciada --}}
                                <input type="submit" value="Comprar" class="boton">
                             @else
                                <input type="submit" value="Comprar" class="boton" disabled>
                            @endif
                        </form>
                    </div>
                </div>
                @endforeach
                
            </div> 
            <div class="mt-3">
                {{$libros->links()}}
            </div>
            
        </div>
    </div>
    @endif
@endsection