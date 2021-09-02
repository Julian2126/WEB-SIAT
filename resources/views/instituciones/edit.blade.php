@extends('layouts.instituciones')

@section('contenidoinstituciones')

<div class="row">
        <div class="col-lg-11">
            <h2>EDITAR INSTITUCION</h2>
        </div>
        <div class="col-lg-1">
           <a class="btn btn-primary" href="/instituciones"> Back</a>
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


    <form action="{{ route('instituciones.update',$instituciones->id) }}" method="POST">
    @method('PATCH')
    @csrf 
    <div class="mb-3">
            <label for="" class="form-label">Nit</label>
            <input class="form-control" type="text" id="Nit" name="Nit" value="{{$instituciones->Nit}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input class="form-control" type="text" id="Nombre" name="Nombre" value="{{$instituciones->Nombre}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input class="form-control" type="text" id="Telefono" name="Telefono" value="{{$instituciones->Telefono}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input class="form-control" type="text" id="Email" name="Email" value="{{$instituciones->Email}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Id_estudiante</label>
            <input class="form-control" type="text" id="Id_estudiante" name="Id_estudiante" value="{{$instituciones->Id_estudiante}}"/>
        </div>
    
        <a href="/instituciones" class="btn btn-danger" tabindex="8">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="9">Guardar</button>

    </form>

@endsection