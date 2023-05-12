@extends('layouts.plantilla')
@section("title", "Books | $post->nombre")
@section('content')
<div class="container">
    <nav class="pt-3" aria-label="breadcrumb">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{route('index')}}">Inicio</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="{{route('blog')}}">Blog</a></li> 
            {{-- FALTA ENLACE CATEGORÍA --}}
            <li class="breadcrumb-item" aria-current="page"><a href="">{{$post->categoria->nombre}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$post->nombre}}</li> 
        </ol>
    </nav>

    <div class="post__container">
        <div class="portada__container">
            <div class="portada mt-3" style="background-image: url({{asset($post->portada)}})">
                <p class="titulo">{{$post->nombre}}</p>
            </div>
            <div class="portada__details">
                <p>{{$post->user->nombre}} {{$post->user->apellidos}}</p>
                <p><i class="bi bi-calendar"></i> {{$post->created_at->format("d/m/Y")}}</p>
            </div>
        </div>

        <div class="content__container mt-2">
            <div class="post-categoria__container">
                <div class="post__content">
                    <h1 class="post__content-titulo">{{$post->nombre}}</h1>
                    <p class="post__content-body">{{$post->cuerpo}}</p>
                </div>
                <div class="categoria__container">
                    <h4 class="titulo">Más artículos de esta categoría</h4>
                    <ul>
                        @foreach ($postsMismaCategoria as $post)
                            <li>
                                <figure>
                                    <img src="{{asset($post->portada)}}" alt="{{$post->nombre}}" class="img-fluid">
                                </figure>
                                <a href="{{route('show.post', $post->slug)}}" class="titulo-post">{{$post->nombre}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="comentarios">
                <div class="title">
                    <p>Comentarios</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection