@extends('layouts.alertas')
 
@section('contenidoalertas')


<div class="bg-secondary dropdown-divider"></div>
  <h1 class="h3 mb-0 text-gray-800 text-success">Alerta</h1>
    <br>
    <div class="row justify-content-center">
        <div class="card col-12 alert-success border-success">
        <br>   
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="card shadow mb-0">
                    <div class="card-body">

                    <a class="float-right ms-5 btn btn-success " href="/alertas">Volver</a>
                    <br><br>
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
                            <th>Id monitor:</th>
                            <td>{{ $alertas->Id_monitor }}</td>
                        </tr>
                        <tr>
                            <th>Id padre</th>
                            <td>{{ $alertas->Id_padre }}</td>
                        </tr>
                    
                    </table>
                        
                </div>
            </div>
          
        </div>
        <br>
    </div>
</div>    
               
@endsection
