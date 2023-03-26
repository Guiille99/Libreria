<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function addCarrito(Request $request){
        $libro = Libro::where('id', $request->input('id'))->first();
        $carrito = session()->get('carrito', []); //Obtengo la sesión del carrito
        $carritoData = session()->get('carrito-data', []);
        // $total = session()->get('total', 0);

        if (isset($carrito[$libro->id])) { //Si el libro ya está en el carrito
            $carrito[$libro->id]["cantidad"]++;
        }
        else{ //Si no está en el carrio lo añadimos
            $carrito[$libro->id]=[
                "titulo"=>$libro->titulo,
                "autor"=>$libro->autor,
                "portada"=>$libro->portada,
                "precio"=>$libro->precio,
                "cantidad"=>1
            ];
        }
        session()->put('carrito', $carrito); //Actualizamos la sesión
        $carritoData["total"] = CarritoController::getTotal(); //Almacenamos el precio total
        $carritoData["cantidad"] = CarritoController::getCantidad(); //Almacenamos la cantidad total
        session()->put("carrito-data", $carritoData);
        
        return redirect()->back();
    }

    public function vaciarCarrito(){
        // dd("Hola");
        session()->forget('carrito'); //Eliminamos el carrito
        session()->forget('carrito-data'); //Eliminamos el precio total y la cantidad de libros almacenamos en el carrito
        return redirect()->back()->with('message', 'Has vaciado la cesta de la compra');
    }

    public function deleteToCart($IDlibro){
        $carrito = session()->get('carrito');
        $carritoData = session()->get('carrito-data');
        unset($carrito[$IDlibro]); //Eliminamos el libro del carrito
        session()->put('carrito', $carrito); //Actualizamos el carrito
        $carritoData["total"] = CarritoController::getTotal();
        $carritoData["cantidad"] = CarritoController::getCantidad();
        session()->put("carrito-data", $carritoData);
        
        if ($carritoData["cantidad"]==0) { //Si se ha vaciado la cesta retornaremos la vista con un alert
            return redirect()->back()->with('message', 'Has vaciado la cesta de la compra');
        }
        return redirect()->back();
    }

    public function showCantidad(){
        // $carrito = session()->get('carrito', []); //Obtengo la sesión del carrito
        
        // return count($carrito);
        $carritoData = session()->get('carrito-data');
        return $carritoData["cantidad"];
    }

    public function getContent(Request $request){
        if($request->input("token")){ //Si recibimos el token
            return view("carrito.offcanvas-cart-content");
        }
    }
    
    public static function getCantidad(){
        $carrito = session()->get('carrito', []); //Obtengo la sesión del carrito
        $cantidad=0;
        foreach ($carrito as $libro) {
            $cantidad += $libro["cantidad"];
        }
        return $cantidad;
    }
    public static function getTotal(){
        $carrito = session()->get('carrito', []);
        $total = 0;
        if (count($carrito)>0) { //Si hay algún libro en el carrito
            foreach ($carrito as $libro) {
                $total+=$libro["precio"]*$libro["cantidad"];
            }
        }
        return $total;
    }
}
