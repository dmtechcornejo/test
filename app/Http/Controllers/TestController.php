<?php

namespace App\Http\Controllers;

use App\Models\TestModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Translation\FileLoader;

class TestController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function camara()
    {
        return view('layouts.camara');
    }

    public function equipo()
    {
        return view('layouts.equipo');
    }

    public function persona()
    {
        return view('layouts.personas');
    }

    public function grafico()
    {
        $chartjs = app()->chartjs
        ->name('lineChartTest')
        ->type('line')
        ->size(['width' => 400, 'height' => 200])
        ->labels(['January', 'February', 'March', 'April', 'May', 'June', 'July'])
        ->datasets([
            [
                "label" => "My First dataset",
                'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                'data' => [65, 59, 80, 81, 56, 55, 40],
            ],
            [
                "label" => "My Second dataset",
                'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                'data' => [12, 33, 44, 44, 55, 23, 40],
            ]
        ])
        ->options([]);

        return view('layouts.grafico', compact('chartjs'));
    }

    public function vehiculo()
    {
        $vehiculos = DB::SELECT('SELECT LEFT(dv.crossTime, 10) Fecha, dv.cameraIndexCode Camara,
        CASE
            WHEN vc.valor = 1 THEN "Salida"
            WHEN vc.valor = 2 THEN "Entrada"
        END Orientacion,
        COUNT(dv.cameraIndexCode) Cantidad
        FROM detalle_vehiculos dv
        JOIN valorcamara vc
        ON vc.idCamara = dv.cameraIndexCode
        GROUP BY Fecha, Camara, Orientacion');
        return view('layouts.vehiculos', compact('vehiculos'));
    }

}
