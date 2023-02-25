<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){ //Listado de todos los usuarios
        $users = User::paginate(5);
        // dd($users);
        return view("admin.index", compact('users'));
    }

    public function create(){
        return view("users.create");
    }

    public function store(Request $request){
        $request->validate([ //Validación de campos
            "nombre" => "required|min:2|max:80|",
            "apellidos" => "required|min:2|max:80|",
            "email" => "required|unique:users",
            "username" => "required|min:5|max:25|unique:users",
            "password" => "required|min:5|max:80"
        ]);
        $user = new User();
        $user->nombre = $request->nombre;
        $user->apellidos = $request->apellidos;
        $user->username = $request->username;
        $user->password =  Hash::make($request->password); //Codificamos la contraseña
        $user->email = $request->email;
        $user->rol = $request->rol;

        $user->save();
        return redirect()->route('admin.users');
        // return view("users.create");
    }

    public function destroy(User $user){ 
        $user->delete(); //Elimina el usuario
        return redirect()->back();
    }

    public function edit(User $user){ 
        return view("users.edit", compact('user'));
    }

    public function update(Request $request, User $user){ 
        $user->nombre = $request->nombre;
        $user->apellidos = $request->apellidos;
        $user->username = $request->username;

        if ($request->password != null) { //Si el campo contraseña no se ha dejado vacío y desea cambiarla
            $user->password =  Hash::make($request->password); //Codificamos la contraseña
        }
        $user->email = $request->email;
        $user->rol = $request->rol;

        $user->save();
        return redirect()->route('admin.users')->with('userUpdate', 'El usuario ha sido actualizado');
    }
}
