<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller{
    public function showBlog(){
        $generos = LibroController::getGeneros();
        //Obtiene los 3 últimos post de la categoría Destacados
        $postsDestacados = Post::where('categoria_id', '5')->latest()->take(3)->get();
        $ultimasResenas = Post::orderby('created_at', 'desc')->take(6)->get();
        return view('blog.blog', compact('generos', 'postsDestacados', 'ultimasResenas'));
    }

    public function showPost($slug){
        $post = Post::where('slug', $slug)->first();
        dd($post);
    }
}
