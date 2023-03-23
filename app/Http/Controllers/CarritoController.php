<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function addCarrito(Request $request){
        $libro = Libro::where('id', $request->input('id'))->first();
        $carrito = session()->get('carrito', []); //Obtengo la sesión del carrito

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
        
        return redirect()->back()->with("message", "Libro añadido al carrito correctamente");
    }
}
