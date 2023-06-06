<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function saberEstadoPedido(){
        return view('support.saberEstadoPedido');
    }
}
