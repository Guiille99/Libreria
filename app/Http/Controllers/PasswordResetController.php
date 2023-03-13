<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class PasswordResetController extends Controller
{
    public function create(){
        return view('auth.forgot-password');
    }

    public function store(Request $request){
        dd(Str::random(64));
        $request->validate([
            "email"=>'required|email|exists:users,email'
        ]);

        // $status = Password::sendResetLink(
        //     $request->only('email')
        // );
    }
}
