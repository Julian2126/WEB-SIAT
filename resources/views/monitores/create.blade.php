@extends('layouts.monitores')

@section('contenidomonitores')

    <h1>CREAR REGISTRO</h1>

    <form action="{{ route('monitores.store') }}" method="POST">
    @csrf 
        <div class="mb-3">
            <label for="" class="form-label">Cédula monitor</label>
            <input class="form-control" type="text" id="Cedula_monitor" name="Cedula_monitor" tabindex="1"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input class="form-control" type="text" id="Nombre" name="Nombre" tabindex="2"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Apellido</label>
            <input class="form-control" type="text" id="Apelllido" name="Apellido" tabindex="3"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input class="form-control" type="text" id="Telefono" name="Telefono" tabindex="4"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input class="form-control" type="text" id="Email" name="Email" tabindex="5"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Id ruta</label>
            <input class="form-control" type="text" id="Id_ruta" name="Id_ruta" tabindex="6"/>
        </div>
    
        <a href="/monitores" class="btn btn-danger" tabindex="7">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="8">Guardar</button>

    </form>

@endsection