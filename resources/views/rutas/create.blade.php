@extends('layouts.rutas')

@section('contenidorutas')

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
            <strong> HUBICACIÓN GPS:</strong>
            <input type="text" class="form-control" id="Hubicacion_gps" name="Hubicacion_gps" placeholder="Ejemplo: 4.6989975,-74.2209889,15">
          </div>
          <div class="col-6">
            <strong> ORIGEN:</strong>
            <input type="text" class="form-control" id="Origen" name="Origen" placeholder="Ejemplo: Funza">
          </div>
          <div class="col-6">
            <strong> DESTINO:</strong>
            <input type="text" class="form-control" id="Destino" name="Destino" placeholder="Ejemplo: Mosquera">
          </div>
          <div class="col-6">
            <strong> ID VEHICULO:</strong>
            <input type="text" class="form-control" id="Id_vehiculo" placeholder="Ejemplo:activo" name="Id_vehiculo">
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


@endsection
