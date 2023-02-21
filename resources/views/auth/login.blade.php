@extends('layouts.plantillalogin')
@section('title', "Login")

@section('content')
<div class="container-fluid vh-100 form__hero">

    <div class="row flex-column gap-2 justify-content-center align-items-center h-100">
        <figure class="w-auto">
            <a href="{{route('index')}}">
                <img src="uploads/logo-nombre2.svg" alt="Logo">
            </a>
        </figure>
        <div class="col-10 col-md-8 col-lg-4 login">
            <h2 class="login__title">LOGIN</h2>
            <form action="">
                <div class="form-floating mt-4">
                    <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Enter email">
                    <label for="usuario" class="form-label">Usuario</label>
                </div>
                <div class="form-floating mt-3">
                    <input type="password" name="passwd" id="passwd" class="form-control" placeholder="Password">
                    <label for="passwd" class="form-label">Contraseña</label>
                </div>

                <div class="mt-3 d-flex justify-content-between gap-2 flex-wrap">
                    <div class="form-check form-switch">
                        <label class="form-check-label" for="checkRemember">Recuérdame</label>
                        <input class="form-check-input" type="checkbox" role="switch" id="checkRemember">
                    </div>

                    <a href="{{route('register.index')}}" class="nocount-link">¿No tienes cuenta? Regístrate</a>
                </div>

                <div class="mt-4">
                    <input type="submit" value="Iniciar Sesión">
                </div>

            </form>
        </div>
    </div>

</div>

@endsection