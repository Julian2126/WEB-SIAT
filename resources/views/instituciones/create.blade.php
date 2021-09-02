@extends('layouts.instituciones')

@section('contenidoinstituciones')

    <h1>CREAR REGISTRO</h1>

    <form action="{{ route('instituciones.store') }}" method="POST">
    @csrf 
        <div class="mb-3">
            <label for="" class="form-label">Nit</label>
            <input class="form-control" type="text" id="Nit" name="Nit" tabindex="1"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input class="form-control" type="text" id="Nombre" name="Nombre" tabindex="2"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input class="form-control" type="text" id="Telefono" name="Telefono" tabindex="3"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input class="form-control" type="text" id="Email" name="Email" tabindex="4"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Id_estudiante</label>
            <input class="form-control" type="text" id="Id_estudiante" name="Id_estudiante" tabindex="6"/>
        </div>
    
        <a href="/instituciones" class="btn btn-danger" tabindex="8">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="9">Guardar</button>

    </form>

@endsection