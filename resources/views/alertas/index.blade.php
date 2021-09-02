@extends('layouts.alertas')

@section('contenidoalertas')
    
<div class="col-lg-21">
        <br><br>
        <div class="row">
            <div class="col-lg-11">
                <h2>ALERTAS</h2>
            </div>

            <div class="col-lg-21">
                <a href="alertas/create" class="btn btn-success">NUEVO</a>
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
                                <th>Tipo</th>
                                <th>Remitente</th>
                                <th>Receptor</th>
                                <th>Id monitor</th>
                                <th>Id padre</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <br>
                        <tbody>
                            @foreach ($alertas as $alertas)
                                <tr>
                                    <td>{{$alertas->id}}</td>
                                    <td>{{$alertas->Tipo}}</td>
                                    <td>{{$alertas->Remitente}}</td>
                                    <td>{{$alertas->Receptor}}</td>
                                    <td>{{$alertas->Id_monitor}}</td>
                                    <td>{{$alertas->Id_padre}}</td>

                                    <td>
                                        <form action="{{ route('alertas.destroy', $alertas->id)}}" method="POST">
                                            <a href="{{ route('alertas.show', $alertas->id) }}" class="btn btn-info">Mostrar</a>
                                            <a href="{{ route('alertas.edit',$alertas->id) }}" class="btn btn-primary">Editar</a>
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

