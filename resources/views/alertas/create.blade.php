@extends('layouts.alertas')

@section('contenidoalertas')

<div class="py-3 col-10 ml-5">
    <div class="bg-secondary dropdown-divider"></div>
      <h2 class="text-success">Datos nueva alerta:</h2>
      <div class="bg-secondary dropdown-divider"></div>
    </div>
    <div class="row justify-content-center py-3">
        <div class="card col-8 alert-success border-success">
          <div class="card-body">
            <form action="{{ route('alertas.store') }}" method="POST">
            @csrf
              <div class="row">
                <div class="col-6 py-2">
                  <strong> TIPO:</strong>
                  <input type="text" class="form-control" placeholder="Ej: Aviso" id="Tipo" name="Tipo"/>
                </div>
                <div class="col-6 py-2">
                  <strong> REMITENTE:</strong>
                  <input type="text" class="form-control" placeholder="Ej: Hernandez" id="Remitente" name="Remitente"/>
                </div>
                <div class="col-6 py-2">
                  <strong> RECEPTOR:</strong>
                  <input type="text" class="form-control" placeholder="Ej: Perez" id="Receptor" name="Receptor"/>
                </div>
                <div class="col-6 py-2">
                    <strong> ID MONITOR: </strong>
                    <input type="text" class="form-control" placeholder="Ej: 53424556" id="Id_monitor" name="Id_monitor"/>
                </div>
                <div class="col-6 py-2">
                    <strong>ID PADRE:</strong>
                    <input type="text" class="form-control" placeholder="Ej: 10327434" id="Id_padre" name="Id_padre"/>
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