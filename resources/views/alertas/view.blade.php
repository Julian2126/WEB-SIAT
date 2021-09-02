@extends('layouts.alertas')
 
@section('contenidoalertas')
<br><br><br>
    <div class="row">
        <div class="col-lg-11">
                <h2>SIAT ALERTAS</h2>
        </div>
        <div class="col-lg-18">
            <a class="btn btn-primary" href="/alertas">volver</a>
        </div>
    </div>
    <br><br><br>

            <table class="table table-bordered table-striped float-left-5">
                <tr>
                    <th>Id:</th>
                    <td>{{ $alertas->id }}</td>
                </tr>
                <tr>
                    <th>Tipo:</th>
                    <td>{{ $alertas->Tipo }}</td>
                </tr>
                <tr>
                    <th>Remitente:</th>
                    <td>{{ $alertas->Remitente }}</td>
                </tr>
                <tr>
                    <th>Receptor:</th>
                    <td>{{ $alertas->Receptor }}</td>
                </tr>
                <tr>
                    <th>Id monitor:</th>
                    <td>{{ $alertas->Id_monitor }}</td>
                </tr>
                <tr>
                    <th>Id padre</th>
                    <td>{{ $alertas->Id_padre }}</td>
                </tr>
               
            </table>
               
@endsection
