@extends('layouts.ficha_tecnica')

@section('contenidoficha_tecnica')

<div class="bg-secondary dropdown-divider"></div>
  <h1 class="h3 mb-0 text-gray-800 text-success">Ficha técnica</h1>
    <br>
    <div class="row justify-content-center">
        <div class="card col-12 alert-success border-success">
        <br>   
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="card shadow mb-0">
                    <div class="card-body">

                    <a class="float-right ms-5 btn btn-success " href="/ficha_tecnica">Volver</a>
                    <br><br>
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
                                            
                </div>
            </div>
        </div>
        <br>
    </div>
</div>
@endsection
