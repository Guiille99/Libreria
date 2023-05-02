<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    public function showPedidos(){
        $generos = LibroController::getGeneros();
        $user = User::find(Auth::user()->id);
        $pedidos = $user->pedidos()->paginate(5);
        return view('pedidos.mis-pedidos', compact('generos', 'user', 'pedidos'));
    }
}
