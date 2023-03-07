@extends('layouts.plantilla')
@section("title", "Books | Blog")
{{-- @section('body-class', 'd-flex flex-column justify-content-between vh-100') --}}

@section('content')
    <div class="imagenes__principales mt-4 col-md-8">
        {{-- <figure>
            <img src="{{asset('uploads/children.jpg')}}" alt="Libros para niños" class="img-fluid">
        </figure> --}}
        <div class="children">
            <h3>Recomendaciones para niños</h3>
        </div>
        <div class="dias__especiales">
            <div class="dia__mujer">
                <p>Día de la mujer</p>
            </div>
            <div class="dia__sanvalentin">
                <p>Día de San Valentín</p>
            </div>
            {{-- <figure>
                <img src="{{asset('uploads/dia-mujer.jpg')}}" alt="Día de la mujer" class="img-fluid">
            </figure>
            <figure>
                <img src="{{asset('uploads/heart.jpg')}}" alt="Día de San Valentín" class="img-fluid"> --}}
            </figure>
        </div>
    </div>
@endsection