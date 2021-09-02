@extends('layouts.padres')
 
@section('contenidopadres')
<br><br><br>
    <div class="row">
        <div class="col-lg-11">
                <h2>SIAT PADRES</h2>
        </div>
        <div class="col-lg-18">
            <a class="btn btn-primary" href="/padres"> Back</a>
        </div>
    </div>
    <br><br><br>

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
               
@endsection
