@extends('layouts.rutas')

@section('contenidorutas')

    <div class="row">
        <div class="col-lg-11">
                <h2>SIAT Vehiculos</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="/rutas"> Back</a>
        </div>
    </div>
    <table class="table table-bordered table-striped">
        <tr>
            <th>Id:</th>
            <td>{{ $rutas->id }}</td>
        </tr>
        <tr>
            <th>Numero ruta:</th>
            <td>{{ $rutas->Numero_ruta }}</td>
        </tr>
        <tr>
            <th>Numero de estudiantes:</th>
            <td>{{ $rutas->Numero_estudiantes }}</td>
        </tr>
        <tr>
            <th>Ubicación GPS:</th>
            <td>{{ $rutas->Hubicacion_gps }}</td>
        </tr>
        <tr>
            <th>Origen:</th>
            <td>{{ $rutas->Origen }}</td>
        </tr>
        <tr>
            <th>Destino:</th>
            <td>{{ $rutas->Destino }}</td>
        </tr>
        <tr>
            <th>Id vehiculo</th>
            <td>{{ $rutas->Id_vehiculo }}</td>
        </tr>
        
    </table>
@endsection
