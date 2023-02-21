@extends('layouts.plantillalogin')
@section('title', "Registro")

@section('content')
<div class="container-fluid vh-100 form__hero">

    <div class="row flex-column gap-2 justify-content-center align-items-center h-100">
        <figure class="w-auto">
            <a href="{{route('index')}}">
                <img src="uploads/logo-nombre2.svg" alt="Logo">
            </a>
        </figure>

        <div class="col-10 col-md-8 col-lg-4 login">
            <h2 class="login__title">REGISTRO</h2>
            <form action="">
                <div class="form-floating mt-3">
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre">
                    <label for="nombre" class="form-label">Nombre</label>
                </div>

                <div class="form-floating mt-3">
                    <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Apellidos">
                    <label for="apellidos" class="form-label">Apellidos</label>
                </div>

                <div class="form-floating mt-3">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                    <label for="email" class="form-label">Email</label>
                </div>

                <div class="form-floating mt-4">
                    <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Enter email">
                    <label for="usuario" class="form-label">Usuario</label>
                </div>

                <div class="form-floating mt-3">
                    <input type="password" name="passwd" id="passwd" class="form-control" placeholder="Password">
                    <label for="passwd" class="form-label">Contraseña</label>
                </div>


                <div class="mt-4">
                    <input type="submit" value="Crear cuenta">
                </div>

            </form>
        </div>
    </div>
</div>

@endsection