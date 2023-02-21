<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Dotenv\Exception\ValidationException;

class LoginController extends Controller
{
    public function index(){
        return view("auth.login");
    }
    public function store(Request $request){
        
        dd($request->input("remember"));
        $credentials = $request->validate([
            "usuario" => "required",
            "password" => "required"
        ]);

        if (!Auth::attempt($credentials, $request->boolean("remember"))) { //Si no se loguea correctamente
            // throw ValidationException::withMessages()
        }
    }
}
