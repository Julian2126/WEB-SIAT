@extends('layouts.rutas')

@section('contenidorutas')

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

                    <a class="float-right ms-5 btn btn-success " href="/rutas">Volver</a>
                    <br><br>

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
                                                 
                </div>
            </div>
          
        </div>
        <br>
    </div>
</div>    

@endsection
