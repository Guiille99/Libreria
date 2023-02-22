<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index(){
        return view("auth.login");
    }
    public function store(Request $request){
        
        // dd($request->input("remember"));
        $request->validate([
            "username" => "required",
            "password" => "required"
        ]);

        if (Auth::attempt($request->only('username', 'password'))) {
            return redirect()->route('index'); 
        }
        return redirect()->route('login.index')->withError('Usuario o contraseña incorrectos');
        // if (Auth::attempt($credentials)) { //Si se loguea correctamente
        //     request()->session()->regenerate(); //Regeneramos la sesión para evitar problemas de seguridad
        //     return redirect()->route('index');
        // }
        
        // else{
        //     throw ValidationException::withMessages([
        //         'username' => 'Usuario incorrecto',
        //         'password' => 'Contraseña incorrecta'
        //     ]);
        //     return redirect()->route('login.index')->withErrors(["usuario"=>trans('auth.failed')])->withInput(request(request(['usuario'])));
        // }

        // $request->session()->regenerate();
        // return redirect('index');
    }
}
