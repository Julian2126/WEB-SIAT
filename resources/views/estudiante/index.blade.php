@extends('layouts.estudiante')

@section('contenidoestudiante')
    
<div class="col-lg-21">
        <br><br>
        <div class="row">
            <div class="col-lg-11">
                <h2>ESTUDIANTES</h2>
            </div>

            <div class="col-lg-21">
                <a href="estudiante/create" class="btn btn-success">NUEVO</a>
            </div>
        </div>

    <div class="bg-secondary dropdown-divider"></div>
       
       <div class="container-fluid">
           <!-- Page Heading -->
          
           <div class="card shadow mb-4">
               <div class="card-body">
                    <table class="table table-striped mt-4">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Número de identificación</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Grado</th>
                                <th>Edad</th>
                                <th>Id ruta</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <br>
                        <tbody>
                            @foreach ($estudiante as $estudiante)
                                <tr>
                                    <td>{{$estudiante->id}}</td>
                                    <td>{{$estudiante->Numero_identificacion}}</td>
                                    <td>{{$estudiante->Nombre}}</td>
                                    <td>{{$estudiante->Apellido}}</td>
                                    <td>{{$estudiante->Grado}}</td>
                                    <td>{{$estudiante->Edad}}</td>
                                    <td>{{$estudiante->Id_ruta}}</td>

                                    <td>
                                        <form action="{{ route('estudiante.destroy', $estudiante->id)}}" method="POST">
                                            <a href="{{ route('estudiante.show', $estudiante->id) }}" class="btn btn-info">Mostrar</a>
                                            <a href="{{ route('estudiante.edit',$estudiante->id) }}" class="btn btn-primary">Editar</a>
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

