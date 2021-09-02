@extends('layouts.estudiante')

@section('contenidoestudiante')

<div class="row">
        <div class="col-lg-11">
            <h2>EDITAR ALERTAS</h2>
        </div>
        <div class="col-lg-1">
           <a class="btn btn-primary" href="/estudiante"> Back</a>
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


    <form action="{{ route('alertas.update',$alertas->id) }}" method="POST">
    @method('PATCH')
    @csrf 
    <div class="mb-3">
            <label for="" class="form-label">Tipo</label>
            <input class="form-control" type="text" id="Tipo" name="Tipo" value="{{$alertas->Tipo}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Remitente</label>
            <input class="form-control" type="text" id="Remitente" name="Remitente" value="{{$alertas->Remitente}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Receptor</label>
            <input class="form-control" type="text" id="Receptor" name="Receptor" value="{{$alertas->Receptor}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Id Monitor</label>
            <input class="form-control" type="text" id="Id_monitor" name="Id_monitor" value="{{$alertas->Id_monitor}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Id padre</label>
            <input class="form-control" type="text" id="Id_padre" name="Id_padre" value="{{$alertas->Id_padre}}"/>
        </div>
    
        <a href="/alertas" class="btn btn-secundary" tabindex="8">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="9">Guardar</button>

    </form>

@endsection