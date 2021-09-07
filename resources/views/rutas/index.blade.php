@extends('layouts.rutas')

@section('contenidorutas')


<div class="bg-secondary dropdown-divider"></div>
  <h1 class="h3 mb-0 text-gray-800 text-success">Rutas</h1>
    <br>
    <div class="row justify-content-center">
        <div class="card col-12 alert-success border-success">
        <br><br>   
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="card shadow mb-0">
                    <div class="card-body">

                    <a class="float-right ms-5 btn btn-success " href="{{ route('rutas.create') }}">Crear</a>
                    <br><br>
                    <table class="table table-striped mt-4">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Numero de ruta</th>
                                <th>Numero de estudiantes</th>
                                <th>Ubicación gps</th>
                                <th>Origen</th>
                                <th>Destino</th>
                                <th>Id_vehiculo</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <br>
                        <tbody>
                            @foreach ($rutas as $rutas)
                                <tr>
                                    <td>{{$rutas->id}}</td>
                                    <td>{{$rutas->Numero_ruta}}</td>
                                    <td>{{$rutas->Numero_estudiantes}}</td>
                                    <td>{{$rutas->Hubicacion_gps}}</td>
                                    <td>{{$rutas->Origen}}</td>
                                    <td>{{$rutas->Destino}}</td>
                                    <td>{{$rutas->Id_vehiculo}}</td>
                                    <td>

                                        

                                        <form action="{{ route('rutas.destroy',$rutas->id)}}" method="POST">    
                                            <a class="btn btn-info" href="{{ route('rutas.show',$rutas->id) }}">Show</a>
                                            <a class="btn btn-primary" href="{{ route('rutas.edit',$rutas->id) }}">Editar</a>
                                            @csrf 
                                            @method('DELETE')   
                                            <button type="submit" class="btn btn-danger">Borrar</button>
                                        </form>
                                        
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <br><br>
    </div>
</div>

@endsection