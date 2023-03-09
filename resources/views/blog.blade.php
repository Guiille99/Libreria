@extends('layouts.plantilla')
@section("title", "Books | Blog")
{{-- @section('body-class', 'd-flex flex-column justify-content-between vh-100') --}}

@section('content')
    {{-- IMÁGENES PRINCIPALES --}}
    <div class="imagenes__principales py-4 col-md-10 col-lg-9">
        <div class="children blog__card">
            <figure>
            <img src="{{asset('uploads/children.jpg')}}" alt="Libros para niños" class="img-fluid">
        </figure>
            <p>Recomendaciones para niños</p>
        </div>

        <div class="dia__mujer blog__card">
            <figure>
                <img src="{{asset('uploads/dia-mujer.jpg')}}" alt="Día de la mujer" class="img-fluid">
            </figure>
            <div class="mensaje__oferta">
                <p> <span class="porcentaje">5%</span> de dto.</p>
            </div>
            <p>Día de la mujer</p>
        </div>

        <div class="dia__sanvalentin blog__card">
            <figure>
                <img src="{{asset('uploads/heart.jpg')}}" alt="Día de San Valentín" class="img-fluid"> 
            </figure>
            <p>Día de San Valentín</p>
        </div>
    </div>

    {{-- ÚLTIMAS RESEÑAS --}}
    <div class="resenas">
        <h1>ÚLTIMAS RESEÑAS</h1>

        <div class="resenas__grid col-md-10 col-lg-9">
            <div class="resena">
                <figure>
                    <img src="{{asset('uploads/resena1.jpg')}}" alt="Consejos para escribir en tercera persona" class="img-fluid">
                </figure>
                <div class="resena__info">
                    <h3>Consejos para escribir una novela en tercera persona</h3>

                    <div class="resena__info__publicacion">
                        <p class="resena__autor">Antonio Ramírez</p>
                        <p class="resena__fecha">02/03/2022</p>
                    </div>
                </div>
            </div>

            <div class="resena">
                <figure>
                    <img src="{{asset('uploads/resena1.jpg')}}" alt="Consejos para escribir en tercera persona" class="img-fluid">
                </figure>
                <div class="resena__info">
                    <h3>Consejos para escribir una novela en tercera persona</h3>

                    <div class="resena__info__publicacion">
                        <p class="resena__autor">Antonio Ramírez</p>
                        <p class="resena__fecha">02/03/2022</p>
                    </div>
                </div>
            </div>

            <div class="resena">
                <figure>
                    <img src="{{asset('uploads/resena1.jpg')}}" alt="Consejos para escribir en tercera persona" class="img-fluid">
                </figure>
                <div class="resena__info">
                    <h3>Consejos para escribir una novela en tercera persona</h3>

                    <div class="resena__info__publicacion">
                        <p class="resena__autor">Antonio Ramírez</p>
                        <p class="resena__fecha">02/03/2022</p>
                    </div>
                </div>
            </div>

            <div class="resena">
                <figure>
                    <img src="{{asset('uploads/resena1.jpg')}}" alt="Consejos para escribir en tercera persona" class="img-fluid">
                </figure>
                <div class="resena__info">
                    <h3>Consejos para escribir una novela en tercera persona</h3>

                    <div class="resena__info__publicacion">
                        <p class="resena__autor">Antonio Ramírez</p>
                        <p class="resena__fecha">02/03/2022</p>
                    </div>
                </div>
            </div>

            <div class="resena">
                <figure>
                    <img src="{{asset('uploads/resena1.jpg')}}" alt="Consejos para escribir en tercera persona" class="img-fluid">
                </figure>
                <div class="resena__info">
                    <h3>Consejos para escribir una novela en tercera persona</h3>

                    <div class="resena__info__publicacion">
                        <p class="resena__autor">Antonio Ramírez</p>
                        <p class="resena__fecha">02/03/2022</p>
                    </div>
                </div>
            </div>

            <div class="resena">
                <figure>
                    <img src="{{asset('uploads/resena1.jpg')}}" alt="Consejos para escribir en tercera persona" class="img-fluid">
                </figure>
                <div class="resena__info">
                    <h3>Consejos para escribir una novela en tercera persona</h3>

                    <div class="resena__info__publicacion">
                        <p class="resena__autor">Antonio Ramírez</p>
                        <p class="resena__fecha">02/03/2022</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection