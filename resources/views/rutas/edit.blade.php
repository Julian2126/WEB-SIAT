@extends('layouts.rutas')

@section('contenidorutas')

<div class="row">
        <div class="col-lg-11">
            <h2>EDITAR RUTA</h2>
        </div>
        <div class="col-lg-1">
           <a class="btn btn-primary" href="/rutas"> Back</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong></strong> Tenemos problemas con el ingreso de datos.<br><br>
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
     <div class="mb-3">
         <label for="" class="form-label">Numero de ruta</label>
         <input id=">Numero_ruta" name="Numero_ruta" type="number" class="form-control" value="{{$rutas->Numero_ruta}}"/>
     </div>    
     <div class="mb-3">
         <label for="" class="form-label">Numero de estudiantes</label>
         <input id="Numero_estudiantes" name="Numero_estudiantes" type="text" class="form-control" value="{{$rutas->Numero_estudiantes}}"/>
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Ubicación GPS</label>
         <input id="Hubicacion_gps" name="Hubicacion_gps" type="text" class="form-control" value="{{$rutas->Hubicacion_gps}}"/>
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Origen</label>
         <input id="Origen" name="Origen" type="text" class="form-control" value="{{$rutas->Origen}}"/>
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Destino</label>
         <input id="Destino" name="Destino" type="text" class="form-control" value="{{$rutas->Destino}}"/>
     </div>
     <div class="mb-3">
         <label for="" class="form-label">Id_vehiculo</label>
         <input id="Id_vehiculo" name="Id_vehiculo" type="text" class="form-control" value="{{$rutas->Id_vehiculo}}"/>
     </div>
    
     
    <a href="/rutas" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
     
</form>

@endsection
