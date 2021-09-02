@extends('layouts.ficha_tecnica')

@section('contenidoficha_tecnica')
    
<div class="col-lg-21">
        <br><br>
        <div class="row">
            <div class="col-lg-11">
                <h2>FICHA TECNICA</h2>
            </div>

            <div class="col-lg-21">
                <a href="ficha_tecnica/create" class="btn btn-success">NUEVO</a>
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
                                <th>Fecha de creación</th>
                                <th>Propietario</th>
                                <th>Soat</th>
                                <th>Tecnomecanica</th>
                                <th>Id vehiculo</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <br>
                        <tbody>
                            @foreach ($ficha_tecnica as $ficha_tecnica)
                                <tr>
                                    <td>{{$ficha_tecnica->id}}</td>
                                    <td>{{$ficha_tecnica->fecha_creacion}}</td>
                                    <td>{{$ficha_tecnica->Propietario}}</td>
                                    <td>{{$ficha_tecnica->Soat}}</td>
                                    <td>{{$ficha_tecnica->Tecnomecanica}}</td>
                                    <td>{{$ficha_tecnica->Id_vehiculo}}</td>

                                    <td>
                                        <form action="{{ route('ficha_tecnica.destroy', $ficha_tecnica->id)}}" method="POST">
                                            <a href="{{ route('ficha_tecnica.show', $ficha_tecnica->id) }}" class="btn btn-info">Mostrar</a>
                                            <a href="{{ route('ficha_tecnica.edit',$ficha_tecnica->id) }}" class="btn btn-primary">Editar</a>
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

