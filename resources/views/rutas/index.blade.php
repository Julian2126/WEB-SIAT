@extends('layouts.rutas')

@section('contenidorutas')

<div class="col-lg-21">
    <br><br>
    <div class="row">
        <div class="col-lg-11">
            <h2>RUTAS</h2>
        </div>

        <div class="col-lg-21">
            <a href="rutas/create" class="btn btn-success">CREAR</a>    
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

   
    <div class="bg-secondary dropdown-divider"></div>
       
       <div class="container-fluid">
           <!-- Page Heading -->
          
           <div class="card shadow mb-4">
               <div class="card-body">
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
    </div>
</div>

@endsection