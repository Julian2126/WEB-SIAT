@extends('layouts.padres')
 
@section('contenidopadres')

<div class="bg-secondary dropdown-divider"></div>
  <h1 class="h3 mb-0 text-gray-800 text-success">Padres</h1>
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

                    <table class="table table-bordered table-striped float-left-5">
                        <tr>
                            <th>Id:</th>
                            <td>{{ $padres->id }}</td>
                        </tr>
                        <tr>
                            <th>Cédula padre:</th>
                            <td>{{ $padres->Cedula_padre }}</td>
                        </tr>
                        <tr>
                            <th>Nombre:</th>
                            <td>{{ $padres->Nombre }}</td>
                        </tr>
                        <tr>
                            <th>Apellido:</th>
                            <td>{{ $padres->Apellido }}</td>
                        </tr>
                        <tr>
                            <th>Teléfono:</th>
                            <td>{{ $padres->Telefono }}</td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td>{{ $padres->Email }}</td>
                        </tr>
                        <tr>
                            <th>Id estudiante</th>
                            <td>{{ $padres->Id_estudiante }}</td>
                        </tr>
                    
                    </table>
                                                                     
                </div>
            </div>
          
        </div>
        <br>
    </div>
</div>    
               
@endsection
