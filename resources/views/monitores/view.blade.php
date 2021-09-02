@extends('layouts.monitores')
 
@section('contenidomonitores')
<br><br><br>
    <div class="row">
        <div class="col-lg-11">
                <h2>SIAT PADRES</h2>
        </div>
        <div class="col-lg-18">
            <a class="btn btn-primary" href="/monitores"> Back</a>
        </div>
    </div>
    <br><br><br>

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
