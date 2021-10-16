@extends('layouts.conductor')

@section('contenidoconductor')
@can ('Modificar Conductor')

<div class="py-3 col-10 ml-5">
    <div class="bg-secondary dropdown-divider"></div>
      <h2 class="text-success">Editar datos conductor:</h2>
</div>

    <div class="row justify-content-center py-3">
        <div class="card col-8 alert-success border-success">
          <div class="card-body">
            <form action="{{ route('conductor.update',$conductor->id) }}" method="POST">
            @method('PATCH')
            @csrf
              <div class="row">
                <div class="col-6 py-2">
                  <strong> IDENTIFICACIÓN:</strong>
                  <input type="text" class="form-control" value="{{$conductor->Numero_identificacion}}" id="Numero_identificacion" name="Numero_identificacion"/>
                </div>
                <div class="col-6 py-2">
                  <strong> NOMBRE:</strong>
                  <input type="text" class="form-control" value="{{$conductor->Nombre}}" id="Nombre" name="Nombre"/>
                </div>
                <div class="col-6 py-2">
                  <strong> APELLIDO:</strong>
                  <input type="text" class="form-control" value="{{$conductor->Apellido}}" id="Apellido" name="Apellido"/>
                </div>
                <div class="col-6 py-2">
                    <strong> TELEFONO:</strong>
                    <input type="text" class="form-control" value="{{$conductor->Telefono}}" id="Telefono" name="Telefono"/>
                  </div>
                  <div class="col-6 py-2">
                    <strong> E-MAIL: </strong>
                    <input type="text" class="form-control" value="{{$conductor->Email}}" id="Email" name="Email"/>
                  </div>
                  <div class="col-6 py-2">
                    <strong> LICENCIA DE CONDUCCIÓN: </strong>
                    <input type="text" class="form-control" value="{{$conductor->Licencia_conduccion}}" id="Licencia_conduccion" name="Licencia_conduccion"/>
                  </div>
                  <div class="col-6 py-2">
                    <strong>ID VEHICULO:</strong>
                    <input type="text" class="form-control" value="{{$conductor->Id_vehiculo}}" id="Id_vehiculo" name="Id_vehiculo"/>
                  </div>
              
                <div class="col-6 py-4">
                  <a href="/conductor" class="btn btn-danger col-5">Cancelar</a>
                  <button type="submit" class="btn btn-success col-5">Guardar</button>
                </div>

              </div>
            </form>
          </div>
        </div>
    </div>
@endcan
@endsection