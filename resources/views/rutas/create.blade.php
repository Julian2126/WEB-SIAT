@extends('layouts.rutas')

@section('contenidorutas')


<h2>CREAR REGISTRO</h2>

<form action="{{ route('rutas.store') }}" method="POST">
    @csrf
     <div class="mb-3">
         <label for="" class="form-label">Numero de ruta</label>
         <input id="Numero_ruta" name="Numero_ruta" type="number" class="form-control" tabindex="1"/>
     </div>    
     <div class="mb-3">
         <label for="" class="form-label">Numero de estudiantes</label>
         <input id="Numero_estudiantes" name="Numero_estudiantes" type="number" class="form-control" tabindex="2"/>
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Ubicación GPS</label>
         <input id="Hubicacion_gps" name="Hubicacion_gps" type="text" class="form-control" tabindex="3"/>
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Origen</label>
         <input id="Origen" name="Origen" type="ntext" class="form-control" tabindex="4"/>
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Destino</label>
         <input id="Destino" name="Destino" type="text" class="form-control" tabindex="5"/>
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Id_vehiculo</label>
         <input id="Id_vehiculo" name="Id_vehiculo" type="number" class="form-control" tabindex="6"/>
     </div>
    
     
    <a href="/rutas" class="btn btn-secondary" tabindex="7">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="8">Guardar</button>
     
</form>

@endsection
