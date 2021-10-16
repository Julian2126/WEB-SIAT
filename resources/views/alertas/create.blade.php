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
                  <!-- <input type="text" class="form-control" placeholder="Ej: Aviso" id="Tipo" name="Tipo"/> -->
                  <select class="form-control" name="Tipo" id="Tipo">
                    <option value=""></option>
                    <option value="Rumbo al colegio">Rumbo al colegio</option>
                    <option value="En el colegio">En el colegio</option>
                    <option value="Rumbo a la casa">Rumbo a la casa</option>
                    <option value="Entregado al acudiente">Entregado al acudiente</option>
                    <option value="En un trancon">En un trancon</option>
                    <option value="Alerta: Llamar a monitor">Alerta: Llamar a monitor</option>
                  </select>
                </div>
                <div class="col-6 py-2">
                    <strong> REMITENTE: </strong>
                    <select class="form-control" name="Id_monitor">
                      @foreach ($monitor as $monitor)
                      <option value="{{$monitor->id}}">{{$monitor->Nombre}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="col-6 py-2">
                    <strong>RECEPTOR:</strong>
                    <select class="form-control" name="Id_padre">
                      @foreach ($padre as $padre)
                      <option value="{{$padre->id}}">{{$padre->Nombre}}</option>
                      @endforeach
                    </select>
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