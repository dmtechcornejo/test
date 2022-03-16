@extends('layouts.plantilla')

@section('title', 'Graficos')

@section('content')
    <!-- Contenido Página -->
    <div class="container py-4">
        <table class="w-96">
            <label class="block">
                <span class="text-gray-700">Favor, ingrese fecha para generar grafico</span>
                <input type="date" class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"/>
                <br>
                <button type="submit" class="btn btn-success active">Cargar Grafico</button>
        </table>
    </div>
@endsection
