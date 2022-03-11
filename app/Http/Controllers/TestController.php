<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return view('layouts.vehiculos');
    }
    public function logo()
    {
        return imagepng('img.logo');
    }
}
