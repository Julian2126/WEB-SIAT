@extends('layouts.instituciones')
 
@section('contenidoinstituciones')
<br><br><br>
    <div class="row">
        <div class="col-lg-11">
                <h2>SIAT INSTITUCION</h2>
        </div>
        <div class="col-lg-18">
            <a class="btn btn-primary" href="/instituciones"> Back</a>
        </div>
    </div>
    <br><br><br>

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
               
@endsection
