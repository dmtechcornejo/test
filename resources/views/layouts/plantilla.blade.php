<!DOCTYPE html>
<html lang="en">
<head>
    <title>Domotica @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <!-- Incorporación Plugin DataTable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

</head>
<body>
@section('sidebar')
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="/"><img src="{{ asset('img/logo.png') }}" alt="Domotica" style="width:50%;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/camara">Camaras</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/vehiculo">Vehiculos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/persona">Personas</a>
                </li>
                <li class="nav-item">
                    <a href="/equipo" class="nav-link">Nuestro Equipo</a>
                </li>
                <li>
                    <a href="/grafico" class="nav-link">Graficos</a>
                </li>
            </ul>
        </div>
    </nav>
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>
