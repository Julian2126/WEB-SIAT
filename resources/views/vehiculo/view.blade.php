@extends('layouts.vehiculo')
 
@section('contenidovehiculo')

<div class="bg-secondary dropdown-divider"></div>
  <h1 class="h3 mb-0 text-gray-800 text-success">Vehiculos</h1>
    <br>
    <div class="row justify-content-center">
        <div class="card col-12 alert-success border-success">
        <br>   
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="card shadow mb-0">
                    <div class="card-body">

                    <a class="float-right ms-5 btn btn-success " href="/vehiculo">Volver</a>
                    <br><br>

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
                             
            </div>
            </div>
          
        </div>
        <br>
    </div>
</div>    
@endsection
