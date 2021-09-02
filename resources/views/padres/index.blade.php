@extends('layouts.padres')

@section('contenidopadres')

    
<div class="col-lg-21">
        <br><br>
        <div class="row">
            <div class="col-lg-11">
                <h2>PADRES</h2>
            </div>

            <div class="col-lg-21">
                <a href="padres/create" class="btn btn-success">NUEVO</a>
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
                                <th>Número de cédula</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th>Id estudiante</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <br>
                        <tbody>
                            @foreach ($padres as $padres)
                                <tr>
                                    <td>{{$padres->id}}</td>
                                    <td>{{$padres->Cedula_padre}}</td>
                                    <td>{{$padres->Nombre}}</td>
                                    <td>{{$padres->Apellido}}</td>
                                    <td>{{$padres->Telefono}}</td>
                                    <td>{{$padres->Email}}</td>
                                    <td>{{$padres->Id_estudiante}}</td>

                                    <td>
                                        <form action="{{ route('padres.destroy', $padres->id)}}" method="POST">
                                            <a href="{{ route('padres.show', $padres->id) }}" class="btn btn-info">Mostrar</a>
                                            <a href="{{ route('padres.edit',$padres->id) }}" class="btn btn-primary">Editar</a>
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

