@extends('layouts.ficha_tecnica')

@section('contenidoficha_tecnica')

    <div class="row">
        <div class="col-lg-11">
                <h2>FICHA TECNICA</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="/ficha_tecnica">Back</a>
        </div>
    </div>
    <table class="table table-bordered table-striped">
        <tr>
            <th>Id:</th>
            <td>{{ $ficha_tecnica->id }}</td>
        </tr>
        <tr>
            <th>Fecha de creacion:</th>
            <td>{{ $ficha_tecnica->fecha_creacion }}</td>
        </tr>
        <tr>
            <th>Propietario:</th>
            <td>{{ $ficha_tecnica->Propietario }}</td>
        </tr>
        <tr>
            <th>Soat:</th>
            <td>{{ $ficha_tecnica->Soat }}</td>
        </tr>
        <tr>
            <th>Tecnomecanica:</th>
            <td>{{ $ficha_tecnica->Tecnomecanica }}</td>
        </tr>
        <tr>
            <th>Id vehiculo</th>
            <td>{{ $ficha_tecnica->Id_vehiculo }}</td>
        </tr>
        
    </table>
@endsection
