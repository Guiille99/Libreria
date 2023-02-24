<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view("auth.register");
    }

    public function store(Request $request){
        $request->validate([ //Validación de campos
            "nombre" => "required|min:2|max:80|",
            "apellidos" => "required|min:2|max:80|",
            "email" => "required|unique:users",
            "username" => "required|min:5|max:25|unique:users",
            "password" => "required|max:80"
        ]);

        
    }
}
