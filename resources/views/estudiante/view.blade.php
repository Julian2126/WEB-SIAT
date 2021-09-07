@extends('layouts.estudiante')

@section('contenidoestudiante')

<div class="bg-secondary dropdown-divider"></div>
  <h1 class="h3 mb-0 text-gray-800 text-success">Estudiante</h1>
    <br>
    <div class="row justify-content-center">
        <div class="card col-12 alert-success border-success">
        <br>   
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="card shadow mb-0">
                    <div class="card-body">

                    <a class="float-right ms-5 btn btn-success " href="/estudiante">Volver</a>
                    <br><br>
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
                        
                </div>
            </div>
          
        </div>
        <br>
    </div>
</div>
@endsection
