@extends('layouts.plantilla-admin')
@section('content')
<div class="col-12 col-md-5 pt-3">
    <form action="{{route('user.update', $user)}}" method="post" class="needs-validation" novalidate>
        @csrf
        @method('put')
        <div class="container-fluid">
            <div class="row">
                <div class="form-floating mt-3 col-md-6">
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre')}}" placeholder="Nombre" required>
                    <label for="nombre" class="form-label ms-1">Nombre</label>
                    <div class="invalid-feedback">
                        <small>Nombre obligatorio</small> 
                    </div>
                </div>
                {{-- @error('nombre')
                    <small class="text-danger">* {{$message}}</small> <br>
                @enderror --}}
        
                <div class="form-floating mt-3 col-md-6">
                    <input type="text" name="apellidos" id="apellidos" class="form-control" value="{{old('apellidos')}}" placeholder="Apellidos" required>
                    <label for="apellidos" class="form-label ms-1">Apellidos</label>
                    <div class="invalid-feedback">
                        <small>Apellidos obligatorio</small> 
                    </div>
                </div>
                {{-- @error('apellidos')
                    <small class="text-danger">* {{$message}}</small> <br>
                @enderror --}}
        
                <div class="form-floating mt-3 col-md-6">
                    <input type="text" name="username" id="username" class="form-control" value="{{old('username')}}" placeholder="Usuario" required>
                    <label for="username" class="form-label ms-1">Usuario</label>
                    <div class="invalid-feedback">
                        <small>Usuario obligatorio</small> 
                    </div>
                </div>
                {{-- @error('username')
                    <small class="text-danger">* {{$message}}</small> <br>
                @enderror --}}


                <div class="form-floating mt-3 col-md-6">
                    <input type="password" name="password" id="password" class="form-control" value="{{old('password')}}" placeholder="Contraseña" required>
                    <label for="password" class="form-label ms-1">Contraseña</label>
                    <div class="invalid-feedback">
                        <small>Contraseña obligatoria</small> 
                    </div>
                </div>
                {{-- @error('password')
                    <small class="text-danger">* {{$message}}</small> <br>
                @enderror --}}

                <div class="form-floating mt-3">
                    <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}" placeholder="Email" required>
                    <label for="email" class="form-label ms-1">Email</label>
                    <div class="invalid-feedback">
                        <small>Email inválido</small> 
                    </div>
                </div>

                <div class="mt-3">
                    <select name="" id="" class="form-select" aria-label="rol">
                        <option value="">-- Selecciona un rol --</option>
                        <option value="user">Usuario</option>
                        <option value="admin">Aministrador</option>
                    </select>
                </div>
                {{-- @error('email')
                    <small class="text-danger">* {{$message}}</small> <br>
                @enderror --}}
        
        
        
        
                <div class="mt-4">
                    <input type="submit" value="Modificar" class="btn btn-primary text-white">
                </div>
    
            </div>
        </div>

    </form>
</div>
@endsection