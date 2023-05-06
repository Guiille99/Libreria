<?php

namespace App\Http\Controllers;

use App\Charts\UsersChart;
use App\Charts\VentasChart;
use App\Models\Libro;
use App\Models\Pedido;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        // dd($this->getUsuariosRegistradosUltMes());
        $chartData = $this->generaGrafica();
        $ingresoUltMes = $this->getIngresoUltMes();
        $beneficioUltMes = $this->getBeneficioUltimoMes();
        $librosVendidosUltMes = $this->getLibrosVendidosUltMes();
        $usuariosUltMes = $this->getUsuariosRegistradosUltMes();
        // dd($usuariosUltMes);
        $ventaChart = $chartData["ventaChart"];
        $userChart = $chartData["userChart"];
        // $monthName = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
        // $ventaChart = new VentasChart;
        // $userChart = new UsersChart;
        // $ventasPorMes = Pedido::selectRaw('MONTH(created_at) as mes, SUM(total) as total')->groupBy('mes')->get();
        // $usuariosPorMes = User::selectRaw('MONTH(created_at) as mes, COUNT(id) as usuarios')->groupBy('mes')->get();
        // $totales=[];
        // $meses=[];
        // foreach ($ventasPorMes as $ventaMes) {
        //     $meses[]= $monthName[$ventaMes->mes-1];
        //     $totales[]=$ventaMes->total;
        // }
        // foreach ($usuariosPorMes as $usuarioMes) {
        //     $mesesUser[]= $monthName[$usuarioMes->mes-1];
        //     $usuarios[]= $usuarioMes->usuarios;
        // }
        // // dd($usuariosPorMes);
        // //Gráfica de ventas
        // $ventaChart->labels($meses);
        // $ventaChart->dataset('Ventas', 'line', $totales)->options([
        //     'color' => "#219250",
        //     'backgroundColor' => '#219250',
        //     'borderColor' => '#219250',
        //     'responsive' => true
        // ]);

        // //Gráfica de usuarios
        // $userChart->labels($mesesUser);
        // $userChart->dataset('Usuarios por mes', 'line', $usuarios)->options([
        //     'color' => "#219250",
        //     'backgroundColor' => '#219250',
        //     'borderColor' => '#219250',
        //     'responsive' => true,
        //     'width' => '200px',
        // ]);
        return view('admin.dashboard', compact('ventaChart', 'userChart'));
    }

    private function generaGrafica(){
        $monthName = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
        // $data = [];
        $ventaChart = new VentasChart;
        $userChart = new UsersChart;
        $ventasPorMes = Pedido::selectRaw('MONTH(created_at) as mes, SUM(total) as total')->groupBy('mes')->get();
        $usuariosPorMes = User::selectRaw('MONTH(created_at) as mes, COUNT(id) as usuarios')->groupBy('mes')->get();
        // $totales=[];
        // $meses=[];
        foreach ($ventasPorMes as $ventaMes) {
            $meses[]= $monthName[$ventaMes->mes-1];
            $totales[]=$ventaMes->total;
        }
        foreach ($usuariosPorMes as $usuarioMes) {
            $mesesUser[]= $monthName[$usuarioMes->mes-1];
            $usuarios[]= $usuarioMes->usuarios;
        }
        // dd($usuariosPorMes);
        //Gráfica de ventas
        $ventaChart->labels($meses);
        $ventaChart->dataset('Ventas', 'line', $totales)->options([
            'color' => "#219250",
            'backgroundColor' => '#219250',
            'borderColor' => '#219250',
            'responsive' => true
        ]);

        //Gráfica de usuarios
        $userChart->labels($mesesUser);
        $userChart->dataset('Usuarios por mes', 'line', $usuarios)->options([
            'color' => "#219250",
            'backgroundColor' => '#219250',
            'borderColor' => '#219250',
            'responsive' => true,
            'width' => '200px',
        ]);
        $data["ventaChart"] = $ventaChart;
        $data["userChart"] = $userChart;
        return $data;
    }

    private function getBeneficioUltimoMes(){
        $mesAnterior = Carbon::now()->subMonth()->month;
        $ingresosUltMes = Pedido::select(DB::raw('SUM(total) as ingreso'))->where(DB::raw('MONTH(created_at)'), '=', $mesAnterior)->first();
        $gastoUltMes = Libro::select(DB::raw('SUM(precio*0.6) as gasto'))->where(DB::raw('MONTH(created_at)'), '=', $mesAnterior)->first();
        $gastoUltMes = ($gastoUltMes->gasto==null) ? 0 : $gastoUltMes->gasto;
        $ingresosUltMes = ($ingresosUltMes->ingreso==null) ? 0 : $ingresosUltMes->ingreso;
        $beneficioUltMes = $ingresosUltMes - $gastoUltMes;
        return $beneficioUltMes;

    }

    private function getIngresoUltMes(){
        $ingresosUltMes = Pedido::select(DB::raw('SUM(total) as ingreso'))->where(DB::raw('MONTH(created_at)'), '=', Carbon::now()->subMonth()->month)->first();
        $ingresosUltMes = ($ingresosUltMes->ingreso==null) ? 0 : $ingresosUltMes->ingreso;
        return $ingresosUltMes;
    }

    private function getLibrosVendidosUltMes(){
        $librosUltMes = Libro::select(DB::raw('COUNT(id) as libros'))->where(DB::raw('MONTH(created_at)'), '=', Carbon::now()->subMonth()->month)->first();
        $librosUltMes = ($librosUltMes->libros==null) ? 0 : $librosUltMes->libros;
        return $librosUltMes;
    }
    private function getUsuariosRegistradosUltMes(){
        $usuariosUltMes = User::select(DB::raw('COUNT(id) as usuarios'))->where(DB::raw('MONTH(created_at)'), '=', Carbon::now()->subMonth()->month)->first();
        $usuariosUltMes = ($usuariosUltMes->usuarios==null) ? 0 : $usuariosUltMes->usuarios;
        return $usuariosUltMes;
    }
}
