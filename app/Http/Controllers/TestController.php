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
        return view('layouts.grafico');
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
