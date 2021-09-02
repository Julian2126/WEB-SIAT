@extends('layouts.monitores')

@section('contenidomonitores')
  
    
<div class="col-lg-21">
        <br><br>
        <div class="row">
            <div class="col-lg-11">
                <h2>MONITORES</h2>
            </div>

            <div class="col-lg-21">
                <a href="monitores/create" class="btn btn-success">NUEVO</a>
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
                                <th>Cédula monitor</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Telefono</th>
                                <th>Email</th>
                                <th>Id ruta</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <br>
                        <tbody>
                            @foreach ($monitores as $monitores)
                                <tr>
                                    <td>{{$monitores->id}}</td>
                                    <td>{{$monitores->Cedula_monitor}}</td>
                                    <td>{{$monitores->Nombre}}</td>
                                    <td>{{$monitores->Apellido}}</td>
                                    <td>{{$monitores->Telefono}}</td>
                                    <td>{{$monitores->Email}}</td>
                                    <td>{{$monitores->Id_ruta}}</td>

                                    <td>
                                        <form action="{{ route('monitores.destroy', $monitores->id) }}" method="POST">
                                            <a href="{{ route('monitores.show', $monitores->id) }}" class="btn btn-info">Mostrar</a>
                                            <a href="{{ route('monitores.edit',$monitores->id) }}" class="btn btn-primary">Editar</a>
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


