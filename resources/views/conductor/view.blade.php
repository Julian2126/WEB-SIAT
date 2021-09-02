@extends('layouts.conductor')
 
@section('contenidoconductor')
<br><br><br>
    <div class="row">
        <div class="col-lg-11">
                <h2>SIAT CONDUCTOR</h2>
        </div>
        <div class="col-lg-18">
            <a class="btn btn-primary" href="/conductor"> Back</a>
        </div>
    </div>
    <br><br><br>

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
               
@endsection
