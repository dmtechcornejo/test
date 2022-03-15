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

    public function vehiculo()
    {
        $vehiculos = TestModel::all();
        return view('layouts.vehiculos', compact('vehiculos'));
    }

}
