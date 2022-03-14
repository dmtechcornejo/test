@extends('layouts.plantilla')

@section('title', 'Vehiculos')

@section('content')
    <!-- Contenido Página -->
    <!--Tabla-->
    <div class="container mt-4">
        @foreach($listarVehi as $listarAuto)
            <div class="container">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Orientacón</th>
                        <th>Tipo</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {{ asset($listarAuto->$crossTime) }}
                    </tr>
                    <tr>

                    </tr>
                    <tr>

                    </tr>
                    </tbody>
                </table>
            </div>
        @endforeach
    </div>
@endsection



