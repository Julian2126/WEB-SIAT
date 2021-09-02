@extends('layouts.padres')

@section('contenidopadres')

    <h1>CREAR REGISTRO</h1>

    <form action="{{ route('padres.store') }}" method="POST">
    @csrf 
        <div class="mb-3">
            <label for="" class="form-label">Cédula padre</label>
            <input class="form-control" type="text" id="Cedula_padre" name="Cedula_padre" tabindex="1"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input class="form-control" type="text" id="Nombre" name="Nombre" tabindex="2"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Apellido</label>
            <input class="form-control" type="text" id="Apellido" name="Apellido" tabindex="3"/>
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
            <label for="" class="form-label">Id_estudiante</label>
            <input class="form-control" type="text" id="Id_estudiante" name="Id_estudiante" tabindex="6"/>
        </div>
    
        <a href="/padres" class="btn btn-secundary" tabindex="8">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="9">Guardar</button>

    </form>

@endsection