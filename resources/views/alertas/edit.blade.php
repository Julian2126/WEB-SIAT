@extends('layouts.alertas')

@section('contenidoalertas')

<div class="py-3 col-10 ml-5">
    <div class="bg-secondary dropdown-divider"></div>
      <h2 class="text-success">Editar datos alerta:</h2>
      <div class="bg-secondary dropdown-divider"></div>
    </div>
    <div class="row justify-content-center py-3">
        <div class="card col-8 alert-success border-success">
          <div class="card-body">
            <form action="{{ route('alertas.update', $alertas->id) }}" method="POST">
            @csrf
            @method('PATCH')
              <div class="row">
                <div class="col-6 py-2">
                  <strong> TIPO:</strong>
                  <input type="text" class="form-control" value="{{$alertas->Tipo}}" id="Tipo" name="Tipo"/>
                </div>
                <div class="col-6 py-2">
                    <strong> ID MONITOR: </strong>
                    <input type="text" class="form-control" value="{{$alertas->Id_monitor}}" id="Id_monitor" name="Id_monitor"/>
                </div>
                <div class="col-6 py-2">
                    <strong>ID PADRE:</strong>
                    <input type="text" class="form-control" value="{{$alertas->Id_padre}}" id="Id_padre" name="Id_padre"/>
                </div>
              
                <div class="col-6 py-4">
                  <a href="/alertas" class="btn btn-danger col-5">Cancelar</a>
                  <button type="submit" class="btn btn-success col-5">Guardar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        
        
      </div>


@endsection