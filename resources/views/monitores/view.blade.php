@extends('layouts.monitores')
 
@section('contenidomonitores')
  
<div class="bg-secondary dropdown-divider"></div>
  <h1 class="h3 mb-0 text-gray-800 text-success">Monitor</h1>
    <br>
    <div class="row justify-content-center">
        <div class="card col-12 alert-success border-success">
        <br>   
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="card shadow mb-0">
                    <div class="card-body">

                    <a class="float-right ms-5 btn btn-success " href="/monitores">Volver</a>
                    <br><br>

                    <table class="table table-bordered table-striped float-left-5">
                        <tr>
                            <th>Id:</th>
                            <td>{{ $monitores->id }}</td>
                        </tr>
                        <tr>
                            <th>Cédula monitor:</th>
                            <td>{{ $monitores->Cedula_monitor }}</td>
                        </tr>
                        <tr>
                            <th>Nombre:</th>
                            <td>{{ $monitores->Nombre }}</td>
                        </tr>
                        <tr>
                            <th>Apellido:</th>
                            <td>{{ $monitores->Apellido }}</td>
                        </tr>
                        <tr>
                            <th>Teléfono:</th>
                            <td>{{ $monitores->Telefono }}</td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td>{{ $monitores->Email }}</td>
                        </tr>
                        <tr>
                            <th>Id estudiante:</th>
                            <td>{{ $monitores->Id_ruta }}</td>
                        </tr>
                    
                    </table>
               
@endsection
