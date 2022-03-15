@extends('layouts.plantilla')

@section('title', 'Vehiculos')

@section('content')
    <!-- Contenido Página -->
    <!--Tabla-->
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <table class="table-fixed w-full">
            <thead>
                <tr class="bg-sky-600 text-white">
                    <th class="w-1/8 py-4 ...">Id</th>
                    <th class="w-1/8 py-4 ...">Fecha</th>
                    <th class="w-1/16 py-4 ...">Camara</th>
                    <th class="w-1/16 py-4 ...">Orientacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vehiculos as $listarAuto)
                    <tr>
                        <th>{{ $listarAuto->id }}</th>
                        <th>{{ $listarAuto->fecha }}</th>
                        <th>{{ $listarAuto->camara }}</th>
                        <th>{{ $listarAuto->orientacion }}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection



