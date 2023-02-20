<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;


class LibroController extends Controller
{
    
    public function index($filtro){
        $generos = Libro::select('genero')->distinct()->get();
        $filtraGenero=false;
        foreach ($generos as $genero) {
            if ($genero->genero == $filtro) {   
                $filtraGenero=true;
            }
        }
        if ($filtraGenero) { //Si se quiere filtrar por categoría
            $libros = Libro::where('genero', $filtro)->get(); //Libros de una determinada categoría
        }
        else{
            $libros = Libro::where('titulo', $filtro)->orWhere('autor', $filtro)->get(); //Libros filtrados por título o autor
        }
        return view("libros.index", compact("generos", "libros"));
    }

    // public function indexCategoria($categoria){
    //     $generos = Libro::select('genero')->distinct()->get(); //Envío tamién los géneros de libros que hay
    //     $libros = Libro::where('genero', $categoria)->get(); //Libros de una determinada categoría
    //     return view("libros.index", compact("libros", "generos"));
    // }

    public function show(){
        return view("libros.show");
    }
}
