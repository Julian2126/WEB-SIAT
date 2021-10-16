@extends('layouts.ficha_tecnica')

@section('contenidoficha_tecnica')

@can ('Crear Ficha')
<div class="py-3 col-10 ml-5">
    <div class="bg-secondary dropdown-divider"></div>
      <h2 class="text-success">Datos Nueva ficha técnica:</h2>
      <div class="bg-secondary dropdown-divider"></div>
    </div>
    <div class="row justify-content-center py-3">
        <div class="card col-8 alert-success border-success">
          <div class="card-body">
            <form action="{{ route('ficha_tecnica.store') }}" method="POST">
            @csrf
              <div class="row">
                <div class="col-6 py-2">
                  <strong> FECHA DE CREACIÓN:</strong>
                  <input type="text" class="form-control" placeholder="Ej: 20/08/2021" id="fecha_creacion" name="fecha_creacion"/>
                </div>

                <div class="col-6 py-2">
                  <strong> PROPIETARIO:</strong>
                  <input type="text" class="form-control" placeholder="Ej: Alejandro Torres"  id="Propietario" name="Propietario"/>
                </div>

                <div class="col-6 py-2">
                  <strong> SOAT:</strong>
                  <input type="text" class="form-control" placeholder="Ej: 1074763971"  id="Soat" name="Soat"/>
                </div>
                
                <div class="col-6 py-2">
                    <strong> TECNOMECÁNICA:</strong>
                    <input type="text" class="form-control" placeholder="Ej: Tecnomecánica" id="Tecnomecanica" name="Tecnomecanica"/>
                </div>

                <div class="col-6 py-2">
                    <strong> ID VEHICULO: </strong>
                    <input type="text" class="form-control" placeholder="Ej: 1" id="Id_vehiculo" name="Id_vehiculo"/>
                </div>
                  
              
                  <div class="row justify-content-center col-12 py-4"> 
                       <a href="/ficha_tecnica" class="btn btn-danger col-5">Cancelar</a>
                     &nbsp; &nbsp;  
                    <button type="submit" class="btn btn-success col-5">Guardar</button>
                  </div>
                </div>
            </form>
        </div>
    </div>
                
</div>
@endcan

@endsection