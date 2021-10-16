@extends('layouts.rutas')

@section('contenidorutas')
@can ('crear rutas')
<br><br>
  <div class="bg-secondary dropdown-divider"></div>
  <h1 class="h3 mb-2 text-gray-800 text-success">Crear ruta</h1>

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
      <form action="{{ route('rutas.store') }}" method="POST">
        @csrf
        <div class="row">
          <div class="col-6">
            <strong> NÚMERO DE RUTA:</strong>
            <input type="text" class="form-control" id="Numero_ruta" placeholder="Ejemplo: Número de ruta" name="Numero_ruta">
          </div>
          <div class="col-6">
            <strong> NÚMERO DE ESTUDIANTE:</strong>
            <input type="text" class="form-control" id="Numero_estudiantes" placeholder="Ejemplo: 10" name="Numero_estudiantes">
          </div>
          <div class="col-6">
            <strong> ORIGEN:</strong>
            <input type="text" class="form-control" id="Origen" name="Origen" placeholder="Ejemplo: Funza">
          </div>
          <div class="col-6">
            <strong> LATITUD ORIGEN:</strong>
            <input type="text" class="form-control" id="Latitud_origen" name="Latitud_origen" placeholder="Ejemplo: 4.6989975">
          </div>
          <div class="col-6">
            <strong> LONGITUD ORIGEN:</strong>
            <input type="text" class="form-control" id="Longitud_origen" name="Longitud_origen" placeholder="Ejemplo: -47.6989975">
          </div>
          <div class="col-6">
            <strong> DESTINO:</strong>
            <input type="text" class="form-control" id="Destino" name="Destino" placeholder="Ejemplo: Mosquera">
          </div>
          <div class="col-6">
            <strong> LATITUD DESTINO:</strong>
            <input type="text" class="form-control" id="Latitud_destino" name="Latitud_destino" placeholder="Ejemplo: 4.6989975">
          </div>
          <div class="col-6">
            <strong> LONGITUD DESTINO:</strong>
            <input type="text" class="form-control" id="Longitud_destino" name="Longitud_destino" placeholder="Ejemplo: -47.6989975">
          </div>
          <div class="col-6">
            <strong> ID VEHICULO:</strong>
            <select  class="form-control" id="vehiculo_id" name="vehiculo_id">
            <option value="" selected disabled>Please select</option>
            @foreach($Vehiculos as $vehiculos)
            <option value= {{$vehiculos->id}}>{{$vehiculos->Placa}}</option>            
            @endforeach
            </select>
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
