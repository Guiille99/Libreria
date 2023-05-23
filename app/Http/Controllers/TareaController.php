<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TareaController extends Controller
{

    public function showCalendar(){
        return view('admin.calendar');
    }

    public function store(Request $request){
        return response()->json("{'prueba': 'exito'}");
    }

    public function getTareas(){
        $tareas = Auth::user()->tareas;
        foreach ($tareas as $tarea) {
            $events[] = [
                "title" => $tarea->titulo,
                "start" => $tarea->inicio,
                "end" => $tarea->fin
            ];
        }

        return response()->json($events);
    }
}
