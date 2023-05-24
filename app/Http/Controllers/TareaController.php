<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TareaController extends Controller
{

    public function showCalendar(){
        return view('admin.calendar');
    }

    public function store(Request $request){
        DB::beginTransaction();
        try {
            $fechaInicioAux = $request->fechaInicio . " ". $request->horaInicio;
            $fechaFinAux = $request->fechaFin . " ". $request->horaFin;
            $fechaInicio = $this->compruebaFechas($fechaInicioAux, $fechaFinAux)["fechaInicio"];
            $fechaFin = $this->compruebaFechas($fechaInicioAux, $fechaFinAux)["fechaFin"];
            
            $tarea = new Tarea();
            $tarea->user_id = Auth::id();
            $tarea->titulo = $request->tarea;
            $tarea->inicio = $fechaInicio;

            $tarea->fin = $fechaFin;
            $tarea->color_texto = $request->colorTexto;
            $tarea->color_fondo = $request->colorFondo;

            $tarea->save();
            DB::commit();
            return response()->json("{'message': 'Tarea añadida correctamente'}");
        } catch (\Throwable $e) {
            DB::rollBack();
            return response()->json("{'message': $e}");
        }
    }

    public function update(Request $request){
        DB::beginTransaction();
        try {
            $fechaInicioAux = $request->fechaInicio . " ". $request->horaInicio;
            $fechaFinAux = $request->fechaFin . " ". $request->horaFin;
            $fechaInicio = $this->compruebaFechas($fechaInicioAux, $fechaFinAux)["fechaInicio"];
            $fechaFin = $this->compruebaFechas($fechaInicioAux, $fechaFinAux)["fechaFin"];

            $tarea = Tarea::where('id', $request->id)->first();
            $tarea->titulo = $request->tarea;
            $tarea->inicio = $fechaInicio;
            $tarea->fin = $fechaFin;
            $tarea->color_texto = $request->colorTexto;
            $tarea->color_fondo = $request->colorFondo;
            $tarea->save();
            DB::commit();
            return response()->json("{'message': $fechaFin}");
        } catch (\Throwable $e) {
            DB::rollBack();
            return response()->json("{'message': 'Ha ocurrido un error inesperado'}");
        }
    }


    public function destroy(Request $request){
        DB::beginTransaction();
        try {
            $tarea = Tarea::find($request->id);
            $tarea = $tarea->delete();
            DB::commit();
            return response()->json("{'message': 'La tarea se ha eliminado correctamente'}");
        } catch (\Throwable $e) {
            DB::rollBack();
            return response()->json("{'message': 'Ha ocurrido un error inesperado'}");
        }
    }

    public function getTareas(){
        $tareas = Auth::user()->tareas;
        foreach ($tareas as $tarea) {
            $events[] = [
                "id" => $tarea->id,
                "title" => $tarea->titulo,
                "start" => $tarea->inicio,
                "end" => $tarea->fin,
                "textColor" => $tarea->color_texto,
                "backgroundColor" => $tarea->color_fondo
            ];
        }

        return response()->json($events);
    }

    private function compruebaHora($hora){
        return ($hora == "") ? date("H:i") : $hora;
    }

    private function compruebaFechas($fechaInicio, $fechaFin){
        $fechaInicioTimestamp = strtotime($fechaInicio);
        $fechaFinTimestamp = strtotime($fechaFin);

        if ($fechaInicioTimestamp > $fechaFinTimestamp) {
            $fechaFinTimestamp = $fechaInicioTimestamp;
        }

        $fechaInicio = date("Y-m-d H:i", $fechaInicioTimestamp);
        $fechaFin = date("Y-m-d H:i", $fechaFinTimestamp);

        return ["fechaInicio" => $fechaInicio, "fechaFin" => $fechaFin];
    }
}
