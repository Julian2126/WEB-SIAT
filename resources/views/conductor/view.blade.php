@extends('layouts.conductor')
 
@section('contenidoconductor')

<div class="bg-secondary dropdown-divider"></div>
  <h1 class="h3 mb-0 text-gray-800 text-success">Conductor</h1>
    <br>
    <div class="row justify-content-center">
        <div class="card col-12 alert-success border-success">
        <br>   
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="card shadow mb-0">
                    <div class="card-body">

                    <a class="float-right ms-5 btn btn-success " href="/conductor">Volver</a>
                    <br><br>
                    <table class="table table-bordered table-striped float-left-5">
                        <tr>
                            <th>Id:</th>
                            <td>{{ $conductor->id }}</td>
                        </tr>
                        <tr>
                            <th>Número de identificación:</th>
                            <td>{{ $conductor->Numero_identificacion }}</td>
                        </tr>
                        <tr>
                            <th>Nombre:</th>
                            <td>{{ $conductor->Nombre }}</td>
                        </tr>
                        <tr>
                            <th>Apellido:</th>
                            <td>{{ $conductor->Apellido }}</td>
                        </tr>
                        <tr>
                            <th>Licencia de conducción:</th>
                            <td>{{ $conductor->Licencia_conduccion }}</td>
                        </tr>
                        <tr>
                            <th>Teléfono:</th>
                            <td>{{ $conductor->Telefono }}</td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td>{{ $conductor->Email }}</td>
                        </tr>
                        <tr>
                            <th>Id estudiante:</th>
                            <td>{{ $conductor->Id_vehiculo }}</td>
                        </tr>
                    
                    </table>
                    
                </div>
            </div>
          
        </div>
        <br>
    </div>
</div>    
@endsection
