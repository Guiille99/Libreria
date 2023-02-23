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
        $remember = $request->filled('remember');
        $request->validate([ //Validación de campos
            "username" => "required",
            "password" => "required"
        ]);

        if (Auth::attempt($request->only('username', 'password'), $remember)) { //Si se loguea correctamente
            $request->session()->regenerate(); //Me crea la sesión y la regeneramos para evitar problemas de seguridad
            return redirect()->route('index'); 
        }
        else{ //Si hay algún error
            $user = User::where('username', $request->username)->first();
            if ($user==null) { //Si el usuario no existe en la BD
                return redirect()->route('login.index')->withErrors(["username"=>"El usuario no existe"]);
            }
            else{
                return redirect()->route('login.index')->withErrors(["password"=>"Contraseña incorrecta"]);
            }
        }


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

    public function logout(Request $request){
        Auth::logout();        
        // Por seguridad, invalidamos la sesión del usuario y regeneramos el token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.index');
    }
}
