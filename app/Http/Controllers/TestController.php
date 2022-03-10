<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
