<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        return view("auth.login");
    }
    public function store(Request $request){
        
        $credentials = $request->validate([
            "usuario" => "required",
            "password" => "required"
        ]);

        if (Auth::attempt([$credentials])) { //Login success
            
        }
    }
}
