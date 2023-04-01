@extends('layouts.plantilla')
@section("title", "Books | Inicio")
@section('content')
<div class="container py-4">
    <div class="cart-container row">
        @if (session()->get('carrito'))
        <div class="productos__carrito col-12 col-md-7 border-end">
            <form action="" method="post">
                @csrf
                @method("put")
                <table class="table">
                    <thead class="border-3 border-bottom">
                        <th>PRODUCTO</th>
                        <th>PRECIO</th>
                        <th>CANTIDAD</th>
                        <th>SUBTOTAL</th>
                    </thead>
                    <tbody>
                        @foreach (session()->get('carrito') as $id => $libro)
                        <tr>
                            <td class="d-flex align-items-center gap-3">
                              <figure>
                                  <img src="{{$libro["portada"]}}" alt="{{$libro["titulo"]}}" class="img-fluid">
                              </figure>
                              <p>{{$libro["titulo"]}}</p>
                            </td>
      
                            <td>{{$libro["precio"]}} €</td>
                            <td><input type="number" name="producto-cantidad" id="" value="{{$libro["cantidad"]}}" min="1" max="{{$libro["stock"]}}" data-idlibro="{{$id}}"></td>
                            <td>{{$libro["precio"]*$libro["cantidad"]}} €</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="d-flex flex-column flex-md-row gap-2 gap-md-4">
                    <a href="" class="boton text-center"><i class="bi bi-arrow-left"></i> Seguir comprando</a>
                    <input type="submit" value="Actualizar carrito" class="boton">
                </div>
            </form>
        </div>
            @else
                <h1 class="text-center">No hay productos en la cesta</h1>
            @endif
        <div class="col-12 col-md-5 border-start">
            <table class="table">
                <thead class="border-3 border-bottom">
                    <th>Total del carrito</th>
                </thead>
                <tbody>
                    <td><p>Total: <span class="fw-bold">{{session()->get('carrito-data')["total"]}} €</span></p> </td>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection