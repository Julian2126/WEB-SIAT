@extends('layouts.instituciones')
 
@section('contenidoinstituciones')

<div class="bg-secondary dropdown-divider"></div>
  <h1 class="h3 mb-0 text-gray-800 text-success">Institución</h1>
    <br>
    <div class="row justify-content-center">
        <div class="card col-12 alert-success border-success">
        <br>   
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="card shadow mb-0">
                    <div class="card-body">

                    <a class="float-right ms-5 btn btn-success " href="/instituciones">Volver</a>
                    <br><br>

                    <table class="table table-bordered table-striped float-left-5">
                        <tr>
                            <th>Id:</th>
                            <td>{{ $instituciones->id }}</td>
                        </tr>
                        <tr>
                            <th>Nit:</th>
                            <td>{{ $instituciones->Nit }}</td>
                        </tr>
                        <tr>
                            <th>Nombre:</th>
                            <td>{{ $instituciones->Nombre }}</td>
                        </tr>
                        <tr>
                            <th>Teléfono:</th>
                            <td>{{ $instituciones->Telefono }}</td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td>{{ $instituciones->Email }}</td>
                        </tr>
                        <tr>
                            <th>Id estudiante</th>
                            <td>{{ $instituciones->Id_estudiante }}</td>
                        </tr>
                    
                    </table>
                                                                      
                </div>
            </div>
          
        </div>
        <br>
    </div>
</div>    
                             
@endsection
