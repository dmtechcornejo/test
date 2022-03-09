<?php

namespace App\Http\Controllers;
use App\Models\TestModel;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function camara()
    {
        return view('layouts.camara');
    }
}
