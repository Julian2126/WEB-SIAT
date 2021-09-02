@extends('layouts.instituciones')

@section('contenidoinstituciones')
  
    
<div class="col-lg-21">
        <br><br>
        <div class="row">
            <div class="col-lg-11">
                <h2>INSTITUCIONES</h2>
            </div>

            <div class="col-lg-21">
                <a href="instituciones/create" class="btn btn-success">NUEVO</a>
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
                                <th>Nit</th>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>Email</th>
                                <th>Id estudiante</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <br>
                        <tbody>
                            @foreach ($instituciones as $instituciones)
                                <tr>
                                    <td>{{$instituciones->id}}</td>
                                    <td>{{$instituciones->Nit}}</td>
                                    <td>{{$instituciones->Nombre}}</td>
                                    <td>{{$instituciones->Telefono}}</td>
                                    <td>{{$instituciones->Email}}</td>
                                    <td>{{$instituciones->Id_estudiante}}</td>

                                    <td>
                                        <form action="{{ route('instituciones.destroy', $instituciones->id)}}" method="POST">
                                            <a href="{{ route('instituciones.show', $instituciones->id) }}" class="btn btn-info">Mostrar</a>
                                            <a href="{{ route('instituciones.edit',$instituciones->id) }}" class="btn btn-primary">Editar</a>
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


