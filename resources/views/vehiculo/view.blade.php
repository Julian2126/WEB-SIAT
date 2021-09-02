@extends('layouts.vehiculo')
 
@section('contenidovehiculo')
<br><br><br>
    <div class="row">
        <div class="col-lg-11">
                <h2>SIAT Vehiculos</h2>
        </div>
        <div class="col-lg-18">
            <a class="btn btn-primary" href="/vehiculo"> Back</a>
        </div>
    </div>
    <br><br><br>

            <table class="table table-bordered table-striped float-left-5">
                <tr>
                    <th>Id:</th>
                    <td>{{ $vehiculo->id }}</td>
                </tr>
                <tr>
                    <th>Placa:</th>
                    <td>{{ $vehiculo->Placa }}</td>
                </tr>
                <tr>
                    <th>Marca:</th>
                    <td>{{ $vehiculo->Marca }}</td>
                </tr>
                <tr>
                    <th>Marca:</th>
                    <td>{{ $vehiculo->Modelo }}</td>
                </tr>
                <tr>
                    <th>Numero sillas:</th>
                    <td>{{ $vehiculo->Numero_sillas }}</td>
                </tr>
                <tr>
                    <th>Motor</th>
                    <td>{{ $vehiculo->Motor }}</td>
                </tr>
                <tr>
                    <th>Estado</th>
                    <td>{{ $vehiculo->Estado }}</td>
                </tr>
                <tr>
                    <th>Medida ancho</th>
                    <td>{{ $vehiculo->Medida_ancho }}</td>
                </tr>
                <tr>
                    <th>Medida alto</th>
                    <td>{{ $vehiculo->Medida_altura }}</td>
                </tr>

            </table>
               
@endsection
