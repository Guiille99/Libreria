<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller{
    public function showBlog(){
        $generos = LibroController::getGeneros();
        //Obtiene los 3 últimos post de la categoría Destacados
        $postsDestacados = Post::where('categoria_id', '5')->latest()->take(3)->get();
        $ultimasResenas = Post::orderby('created_at', 'desc')->take(6)->get();
        return view('blog.blog', compact('generos', 'postsDestacados', 'ultimasResenas'));
    }

    public function showPost($slug){
        $generos = LibroController::getGeneros();
        $post = Post::where('slug', $slug)->first();
        $postsMismaCategoria = Post::where('categoria_id', $post->categoria->id)->where('nombre', '!=', $post->nombre)->take(3)->get();
        $comentarios = $post->comentarios;
        return view('blog.post', compact('post', 'postsMismaCategoria', 'comentarios', 'generos'));
    }

    public function addComment(Request $request, Post $post){
        $request->validate([
            "comentario" => "required"
        ]);

        DB::beginTransaction();
        try {
            $comentario = new Comentario();
            $comentario->cuerpo = $request->comentario;
            $comentario->post_id = $post->id;
            $comentario->user_id = Auth::user()->id;
            $comentario->save();
            DB::commit();
            return redirect()->back()->with("message", "Comentario añadido correctamente");
        } catch (\Throwable $e) {
            DB::rollBack();
            return redirect()->back()->with("message_error", "Ha ocurrido un error inesperado");
        }
    }
}
