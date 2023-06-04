<?php

namespace App\Http\Controllers;

use App\Jobs\SendContactEmail;
use Illuminate\Http\Request;
use App\Models\Libro;

class ContactoController extends Controller
{
    public function index(){
        $generos = Libro::select('genero')->distinct()->get();

        foreach ($generos as $genero) {
            if (strpos($genero->genero, "/")!="") { //Si se encuentra / en el nombre del género lo sustituiremos para evitar errores
                $genero->genero = str_replace(["/"], "-", $genero->genero);
            }
        }

        return view("contacto", compact("generos"));
    }

    public function sendMessage(Request $request){
        // dd($request);
        $request->validate([
            "nombre" => "required",
            "email" => "required|email",
            "mensaje" => "required"
        ]);
        // dd($request->email);
        dispatch(new SendContactEmail($request->mensaje, $request->email));
        return redirect()->back();
    }
}
