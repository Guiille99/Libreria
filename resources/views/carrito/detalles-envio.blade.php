@extends('layouts.plantilla')
@section("title", "Detalles de envío")
@section('content')
<div class="shop-steps-container mt-3 col-11 col-md-8 col-lg-5 m-auto">
    <ul class="m-0 p-0">
        {{-- Step 1 --}}
        <li class="active">
            <a href="{{route('show-cart')}}">
                <div class="step-circle">
                    <span>1</span>
                </div>
                <p>Carrito</p>
            </a>
        </li>
        <div class="separator"></div>
        {{-- Step 2 --}}
        <li class="active">
            <a>
                <div class="step-circle">
                    <span>2</span>
                </div>
                <p>Detalles de envío</p>
            </a>
        </li>
        <div class="separator"></div>
        {{-- Step 3 --}}
        <li>
            <a>
                <div class="step-circle">
                    <span>3</span>
                </div>
                <p>Método de pago</p>
            </a>
        </li>
    </ul>
</div>


@endsection