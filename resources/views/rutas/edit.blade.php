@extends('layouts.rutas')

@section('contenidorutas')

<br><br>
  <div class="bg-secondary dropdown-divider"></div>
  @can ('Modificar rutas')
  <h1 class="h3 mb-2 text-gray-800 text-success">Editar ruta</h1>
@endcan
  <div class="row justify-content-center">
  <div class="card col-8 alert-success border-success ">
    <div class="card-body">
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Advertencia</strong> Hubo problemas con su registro.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
      <form action="{{ route('rutas.update',$rutas->id) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="row">
          <div class="col-6">
            <strong> NÚMERO DE RUTA:</strong>
            <input type="text" class="form-control" id="Numero_ruta" value="{{$rutas->Numero_ruta}}" name="Numero_ruta"/>
          </div>
          <div class="col-6">
            <strong> NÚMERO DE ESTUDIANTE:</strong>
            <input type="text" class="form-control" id="Numero_estudiantes" value="{{$rutas->Numero_estudiantes}}" name="Numero_estudiantes"/>
          </div>
          <div class="col-6">
            <strong> ORIGEN:</strong>
            <input type="text" class="form-control" id="Origen" name="Origen" value="{{$rutas->Origen}}"/>
          </div>
          <div class="col-6">
            <strong> LATITUD ORIGEN:</strong>
            <input type="text" class="form-control" id="Latitud_origen" name="Latitud_origen" value="{{$rutas->Latitud_origen}}"/>
          </div>
          <div class="col-6">
            <strong> LONGITUD ORIGEN:</strong>
            <input type="text" class="form-control" id="Longitud_origen" name="Longitud_origen" value="{{$rutas->Longitud_origen}}"/>
          </div>
          <div class="col-6">
            <strong> DESTINO:</strong>
            <input type="text" class="form-control" id="Destino" name="Destino" value="{{$rutas->Destino}}"/>
          </div>
          <div class="col-6">
            <strong> LATITUD DESTINO:</strong>
            <input type="text" class="form-control" id="Latitud_destino" name="Latitud_destino" value="{{$rutas->Latitud_destino}}"/>
          </div>
          <div class="col-6">
            <strong> LONGITUD DESTINO:</strong>
            <input type="text" class="form-control" id="Longitud_destino" name="Longitud_destino" value="{{$rutas->Longitud_destino}}"/>
          </div>
          <div class="col-6">
            <strong> ID VEHICULO:</strong>
            <input type="text" class="form-control" id="Id_vehiculo" value="{{$rutas->Id_vehiculo}}" name="Id_vehiculo">
          </div>
          <div class="col-6 py-4">
            <a href="{{ url('rutas') }}" class="btn btn-danger col-5">Cancelar</a>
                     &nbsp; &nbsp;  
            <button type="submit" class="btn btn-success col-5">Guardar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>  
<div class="bg-secondary dropdown-divider"></div>

@endcan
@endsection
