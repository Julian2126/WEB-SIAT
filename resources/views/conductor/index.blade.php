@extends('layouts.conductor')
@section('contenidoconductor')

                
<div class="col-lg-21">
        <br><br>
        <div class="row">
            <div class="col-lg-11">
                <h2>CONDUCTORES</h2>
            </div>

            <div class="col-lg-21">
                <a href="conductor/create" class="btn btn-success">NUEVO</a>
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
                                <th>Licencia de conducción</th>
                                <th>Telefono</th>
                                <th>Email</th>
                                <th>Id vehiculo</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <br>
                        <tbody>
                            @foreach ($conductor as $conductor)
                                <tr>
                                    <td>{{$conductor->id}}</td>
                                    <td>{{$conductor->Numero_identificacion}}</td>
                                    <td>{{$conductor->Nombre}}</td>
                                    <td>{{$conductor->Apellido}}</td>
                                    <td>{{$conductor->Licencia_conduccion}}</td>
                                    <td>{{$conductor->Telefono}}</td>
                                    <td>{{$conductor->Email}}</td>
                                    <td>{{$conductor->Id_vehiculo}}</td>

                                    <td>
                                        <form action="{{ route('conductor.destroy', $conductor->id) }}" method="POST">
                                            <a href="{{ route('conductor.show', $conductor->id) }}" class="btn btn-info">Mostrar</a>
                                            <a href="{{ route('conductor.edit',$conductor->id) }}" class="btn btn-primary">Editar</a>
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