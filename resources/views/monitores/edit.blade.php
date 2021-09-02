@extends('layouts.monitores')

@section('contenidomonitores')

<div class="row">
        <div class="col-lg-11">
            <h2>EDITAR MONITOR</h2>
        </div>
        <div class="col-lg-1">
           <a class="btn btn-primary" href="/monitores"> Back</a>
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


    <form action="{{ route('monitores.update',$monitores->id) }}" method="POST">
    @method('PATCH')
    @csrf 
    <div class="mb-3">
            <label for="" class="form-label">Cédula monitor</label>
            <input class="form-control" type="text" id="Cedula_monitor" name="Cedula_monitor" value="{{$monitores->Cedula_monitor}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input class="form-control" type="text" id="Nombre" name="Nombre" value="{{$monitores->Nombre}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Apellido</label>
            <input class="form-control" type="text" id="Apelllido" name="Apellido" value="{{$monitores->Apellido}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input class="form-control" type="text" id="Telefono" name="Telefono" value="{{$monitores->Telefono}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input class="form-control" type="text" id="Email" name="Email" value="{{$monitores->Email}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Id ruta</label>
            <input class="form-control" type="text" id="Id_ruta" name="Id_ruta" value="{{$monitores->Id_ruta}}"/>
        </div>
    
        <a href="/monitores" class="btn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>

    </form>

@endsection