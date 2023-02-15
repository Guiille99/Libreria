<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index(){
        return view("libros.index");
    }
    public function show(){
        return view("libros.show");
    }
}
