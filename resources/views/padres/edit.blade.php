@extends('layouts.padres')

@section('contenidopadres')

<div class="row">
        <div class="col-lg-11">
            <h2>EDITAR PADRES</h2>
        </div>
        <div class="col-lg-1">
           <a class="btn btn-primary" href="/padres"> Back</a>
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


    <form action="{{ route('padres.update',$padres->id) }}" method="POST">
    @method('PATCH')
    @csrf 
    <div class="mb-3">
            <label for="" class="form-label">Cédula padre</label>
            <input class="form-control" type="text" id="Cedula_padre" name="Cedula_padre" value="{{$padres->Cedula_padre}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input class="form-control" type="text" id="Nombre" name="Nombre" value="{{$padres->Nombre}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Apellido</label>
            <input class="form-control" type="text" id="Apellido" name="Apellido" value="{{$padres->Apellido}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input class="form-control" type="text" id="Telefono" name="Telefono" value="{{$padres->Telefono}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input class="form-control" type="text" id="Email" name="Email" value="{{$padres->Email}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Id_estudiante</label>
            <input class="form-control" type="text" id="Id_estudiante" name="Id_estudiante" value="{{$padres->Id_estudiante}}"/>
        </div>
    
        <a href="/padres" class="btn btn-danger" tabindex="8">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="9">Guardar</button>

    </form>

@endsection