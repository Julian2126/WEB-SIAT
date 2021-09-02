@extends('layouts.estudiante')

@section('contenidoestudiante')

    <div class="row">
        <div class="col-lg-11">
                <h2>SIAT ESTUDIANTE</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="/estudiante"> Back</a>
        </div>
    </div>
    <table class="table table-bordered table-striped">
        <tr>
            <th>Id:</th>
            <td>{{ $estudiante->id }}</td>
        </tr>
        <tr>
            <th>Numero de identificación:</th>
            <td>{{ $estudiante->Numero_identificacion }}</td>
        </tr>
        <tr>
            <th>Nombre:</th>
            <td>{{ $estudiante->Nombre }}</td>
        </tr>
        <tr>
            <th>Apellido:</th>
            <td>{{ $estudiante->Hubicacion_gps }}</td>
        </tr>
        <tr>
            <th>Grado:</th>
            <td>{{ $estudiante->Origen }}</td>
        </tr>
        <tr>
            <th>Edad:</th>
            <td>{{ $estudiante->Destino }}</td>
        </tr>
        <tr>
            <th>Id ruta</th>
            <td>{{ $estudiante->Id_vehiculo }}</td>
        </tr>
        
    </table>
@endsection
