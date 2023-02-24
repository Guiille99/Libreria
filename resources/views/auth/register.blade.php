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

            <form action="{{route("register.store")}}" method="post" class="needs-validation" novalidate>
                @csrf
                <div class="form-floating mt-3">
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre')}}" placeholder="Nombre">
                    <label for="nombre" class="form-label">Nombre</label>
                </div>
                @error('nombre')
                    <small class="text-danger">* {{$message}}</small> <br>
                @enderror

                <div class="form-floating mt-3">
                    <input type="text" name="apellidos" id="apellidos" class="form-control" value="{{old('apellidos')}}" placeholder="Apellidos">
                    <label for="apellidos" class="form-label">Apellidos</label>
                </div>
                @error('apellidos')
                    <small class="text-danger">* {{$message}}</small> <br>
                @enderror

                <div class="form-floating mt-3">
                    <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}" placeholder="Email">
                    <label for="email" class="form-label">Email</label>
                    <div class="invalid-feedback">
                        <small>Formato email inválido</small> 
                    </div>
                </div>
                @error('email')
                    <small class="text-danger">* {{$message}}</small> <br>
                @enderror

                <div class="form-floating mt-4">
                    <input type="text" name="username" id="username" class="form-control" value="{{old('username')}}" placeholder="Usuario">
                    <label for="username" class="form-label">Usuario</label>
                </div>
                @error('username')
                    <small class="text-danger">* {{$message}}</small> <br>
                @enderror

                <div class="form-floating mt-3">
                    <input type="password" name="password" id="password" class="form-control" value="{{old('password')}}" placeholder="Contraseña">
                    <label for="password" class="form-label">Contraseña</label>
                </div>
                @error('password')
                    <small class="text-danger">* {{$message}}</small> <br>
                @enderror


                <div class="mt-4">
                    <input type="submit" value="Crear cuenta">
                </div>

            </form>
        </div>
    </div>
</div>
<script>
        (() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
@endsection