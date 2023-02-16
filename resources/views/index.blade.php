@extends('layouts.plantilla')
@section("title", "Books | Inicio")
@section('content')
    <div id="carrusel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carrusel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carrusel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carrusel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="uploads/carrusel1.jpg" class="d-block w-100" alt="Imagen del carrusel">
            <div class="h-100 w-100 position-absolute d-none d-md-grid top-0 start-0 align-items-center justify-content-center">
                <div class="carousel-caption">
                    <h1>¡Bienvenido a Books!</h1>
                    <p>Disfruta de los mejores libros al mejor precio.</p>
                </div>
            </div>
            </div>
            <div class="carousel-item">
            <img src="uploads/carrusel2.jpg" class="d-block w-100" alt="Imagen del carrusel">
            </div>
            <div class="carousel-item">
            <img src="uploads/carrusel3.jpg" class="d-block w-100" alt="Imagen del carrusel">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carrusel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carrusel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
    <main class="container-xl">
        <div class="row">
            <div class="recomendados__container mt-5 col-6 col-md-9 m-auto">
                <div class="title__container">
                    <h1 class="text-center">Recomendados</h1>
                </div>
                <div class="libros__container mt-3">
                    <div class="card">
                        <figure class="m-0">
                            <img src="uploads/Libros/la-niebla-de-los-bosques.jpg" alt="" class="img-fluid">
                        </figure>
                        <div class="libro__info">
                            <h3 class="libro__titulo">Título</h3>
                            <p class="libro__autor">Autor</p>
                            <p class="libro__precio">15 €</p>
                            <button>Comprar</button>
                        </div>
                    </div>
    
                    <div class="card">
                        <figure class="m-0">
                            <img src="uploads/Libros/la-niebla-de-los-bosques.jpg" alt="" class="img-fluid">
                        </figure>
                        <div class="libro__info">
                            <h3 class="libro__titulo">Título</h3>
                            <p class="libro__autor">Autor</p>
                            <p class="libro__precio">15 €</p>
                            <button>Comprar</button>
                        </div>
                    </div>
    
                    <div class="card">
                        <figure class="m-0">
                            <img src="uploads/Libros/la-niebla-de-los-bosques.jpg" alt="" class="img-fluid">
                        </figure>
                        <div class="libro__info">
                            <h3 class="libro__titulo">Título</h3>
                            <p class="libro__autor">Autor</p>
                            <p class="libro__precio">15 €</p>
                            <button>Comprar</button>
                        </div>
                    </div>
    
                    <div class="card">
                        <figure class="m-0">
                            <img src="uploads/Libros/la-niebla-de-los-bosques.jpg" alt="" class="img-fluid">
                        </figure>
                        <div class="libro__info">
                            <h3 class="libro__titulo">Título</h3>
                            <p class="libro__autor">Autor</p>
                            <p class="libro__precio">15 €</p>
                            <button>Comprar</button>
                        </div>
                    </div>
    
                    <div class="card">
                        <figure class="m-0">
                            <img src="uploads/Libros/la-niebla-de-los-bosques.jpg" alt="" class="img-fluid">
                        </figure>
                        <div class="libro__info">
                            <h3 class="libro__titulo">Título</h3>
                            <p class="libro__autor">Autor</p>
                            <p class="libro__precio">15 €</p>
                            <button>Comprar</button>
                        </div>
                    </div>
    
                </div>
                
            </div>
        </div>
    </main>
@endsection