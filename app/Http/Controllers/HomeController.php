<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){

        $libros_recomendados = Libro::orderby('valoracion', 'desc')->take(5)->get();
        $libros_recientes = Libro::orderby('fecha_publicacion', 'desc')->take(5)->get();
        $generos = Libro::select('genero')->distinct()->get();

        foreach ($generos as $genero) {
            if (strpos($genero->genero, "/")!="") { //Si se encuentra / en el nombre del género lo sustituiremos para evitar errores
                $genero->genero = str_replace(["/"], "-", $genero->genero);
            }
        }
        return view("index", compact('libros_recomendados', 'libros_recientes', 'generos'));
    }

    public function showQuienesSomos(){
        return view('empresa.quienes-somos');
    }

    public function showCondicionesUso(){
        return view('empresa.condiciones-uso');
    }
    public function showProteccionDatos(){
        return view('empresa.politica-proteccion-datos');
    }
    public function showPoliticaCookies(){
        return view('empresa.politica-cookies');
    }
}
