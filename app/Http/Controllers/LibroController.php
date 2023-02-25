<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use Illuminate\Support\Facades\Hash;

class LibroController extends Controller
{
 
    public function index(){
        $libros = Libro::paginate(5);
        return view("admin.libros", compact('libros'));
    }

    public function filter($filtro){
        $generos = Libro::select('genero')->distinct()->get();
        $filtraGenero=false;
        // dd(mb_stripos($filtro, "/"));
        foreach ($generos as $genero) {
            if ($genero->genero == $filtro) {   
                $filtraGenero=true;
            }
            if (strpos($genero->genero, "/")!="") { //Si se encuentra / en el nombre del género lo sustituiremos para evitar errores
                $genero->genero = str_replace(["/"], "-", $genero->genero);
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

    public function getFiltro(Request $request){
        return redirect()->route('libros.index', $request->filtro); //Envío el filtro recogido en la barra de búsqueda y lo envío
    }

    // public function indexCategoria($categoria){
    //     $generos = Libro::select('genero')->distinct()->get(); //Envío tamién los géneros de libros que hay
    //     $libros = Libro::where('genero', $categoria)->get(); //Libros de una determinada categoría
    //     return view("libros.index", compact("libros", "generos"));
    // }

    public function destroy(Libro $libro){ 
        // dd($libro);
        $libro->delete(); //Elimina el libro
        return redirect()->route('libros.index');
    }

    public function edit(Libro $libro){ 
        return view("libros.edit", compact('libro'));
    }

    public function update(Request $request, Libro $libro){ 
        $libro->nombre = $request->nombre;
        $libro->apellidos = $request->apellidos;
        $libro->username = $request->username;

        if ($request->password != null) { //Si el campo contraseña no se ha dejado vacío y desea cambiarla
            $libro->password =  Hash::make($request->password); //Codificamos la contraseña
        }
        $libro->email = $request->email;
        $libro->rol = $request->rol;

        $libro->save();
        return redirect()->route('admin.users')->with('userUpdate', 'El usuario ha sido actualizado');
    }

    public function show(){
        return view("libros.show");
    }
}
