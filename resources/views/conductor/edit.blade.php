@extends('layouts.conductor')

@section('contenidoconductor')

<div class="row">
        <div class="col-lg-11">
            <h2>EDITAR CONDUCTOR</h2>
        </div>
        <div class="col-lg-1">
           <a class="btn btn-primary" href="/conductor"> Back</a>
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


    <form action="{{ route('conductor.update',$conductor->id) }}" method="POST">
    @method('PATCH')
    @csrf 
        <div class="mb-3">
            <label for="" class="form-label">Numero de identificacion</label>
            <input class="form-control" type="text" id="Numero_identificacion" name="Numero_identificacion" value="{{$conductor->Numero_identificacion}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input class="form-control" type="text" id="Nombre" name="Nombre" value="{{$conductor->Nombre}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Apellido</label>
            <input class="form-control" type="text" id="Apelllido" name="Apellido" value="{{$conductor->Apellido}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Licencia de conducción</label>
            <input class="form-control" type="text" id="Licencia_conduccion" name="Licencia_conduccion" value="{{$conductor->Licencia_conduccion}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input class="form-control" type="text" id="Telefono" name="Telefono" value="{{$conductor->Telefono}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input class="form-control" type="text" id="Email" name="Email" value="{{$conductor->Email}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Id vehiculo</label>
            <input class="form-control" type="text" id="Id_vehiculo" name="Id_vehiculo" value="{{$conductor->Id_vehiculo}}"/>
        </div>
    
        <a href="/conductor" class="btn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>

    </form>

@endsection