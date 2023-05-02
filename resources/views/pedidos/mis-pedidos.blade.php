@extends('layouts.plantilla-editPerfil')
@section('content-profile')
@section('breadcrumb-profile')
<li class="breadcrumb-item"><a href="{{route('index')}}">Inicio</a></li>
<li class="breadcrumb-item active" aria-current="page">Mis pedidos</li> 
@endsection
@section('misPedidos-isActive', 'active')
{{-- {{$user->pedidos}} --}}
{{-- {{$pedidos}} --}}
    <div class="column account__details order-section w-100">
        <div class="title">
            <p>MIS PEDIDOS</p>
        </div>
        @if ($user->pedidos->count()==0)
        <div class="alert alert-warning mt-2" role="alert">
            <i class="bi bi-exclamation-triangle"></i>
            <span>Aún no ha realizado ningún pedido desde esta cuenta</span>
          </div>
        @else
        <div class="table-responsive">
            <table class="table table-striped align-middle">
                <thead>
                    <th>Número de pedido</th>
                    <th>Fecha de pedido</th>
                    <th>Estado</th>
                    <th>Tipo de pago</th>
                    <th>Total</th>
                </thead>
                <tbody>
                    @foreach ($pedidos as $pedido)
                        <tr>
                            <td>{{$pedido->id}}</td>
                            <td>{{$pedido->created_at->format('d-m-Y H:m:s')}}</td>
                            <td>{{$pedido->estado}}</td>
                            <td>{{$pedido->tipo_pago}}</td>
                            <td>{{$pedido->total}}€</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
            <div class="w-100">
                {{$pedidos->links()}}
            </div>
        @endif
    </div>
@endsection
{{-- @section('script')
    <script>
        $(document).ready(function(){
            
        })
    </script>
@endsection --}}