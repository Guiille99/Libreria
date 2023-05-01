@extends('layouts.plantilla-editPerfil')
@section('content-profile')
@section('breadcrumb-profile')
<li class="breadcrumb-item"><a href="{{route('index')}}">Inicio</a></li>
<li class="breadcrumb-item" aria-current="page"><a href="{{route('user.editPerfil', Auth::user())}}">Mi cuenta</a></li> 
<li class="breadcrumb-item" aria-current="page"><a href="{{route('user.editPerfil-direcciones', Auth::user())}}">Mis direcciones</a></li> 
<li class="breadcrumb-item active" aria-current="page">Editar dirección</li> 
@endsection
@section('miCuenta-isActive', 'active')

@endsection