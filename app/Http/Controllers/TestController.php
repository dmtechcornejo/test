<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Translation\FileLoader;

class TestController extends Controller
{
    public function index()
    {
        return view('layouts.index');
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

    public function vehiculo()
    {
        $listarVehi = DB::select('select left(crossTime, 10) fecha, cameraIndexCode camara, count(crossTime)
						from detalle_vehiculos
						group by fecha, camara');
        //$listarAutos = Vehiculo::all();
        return view('layouts.vehiculos', compact('listarVehi'));
    }

}
