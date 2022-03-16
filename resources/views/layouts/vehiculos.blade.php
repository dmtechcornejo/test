@extends('layouts.plantilla')

@section('title', 'Vehiculos')

@section('content')
    <!-- Contenido Página -->
    <!--Tabla-->
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <table id="dataTable" class="table-fixed w-full">
            <thead>
                <tr class="bg-sky-600 text-white">
                    <th class="w-1/8 py-4">Fecha</th>
                    <th class="w-1/16 py-4">Camara</th>
                    <th class="w-1/16 py-4">Orientacion</th>
                    <th class="w-1/16 py-4">Cantidad</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vehiculos as $listarAuto)
                    <tr>
                        <th>{{ date("d/m/Y", strtotime($listarAuto->Fecha)) }}</th>
                        <th>{{ $listarAuto->Camara }}</th>
                        <th>{{ $listarAuto->Orientacion }}</th>
                        <th>{{ $listarAuto->Cantidad }}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable();
        });
    </script>
@endsection



