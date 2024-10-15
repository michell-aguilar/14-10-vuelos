
@extends('layout.app')

@section('title', 'Avion')

@section('content')

<h1>Crear Avion</h1>
<h5>Formulario para crear avion</h5>
<hr>
<form class="row g-3" action="/avion/store" method="POST">
    @csrf
    <div class="col-md-6">
        <label for="modelo" class="form-label">Modelo</label>
        <input type="text" name="modelo" class="form-control" id="modelo">
        @error('modelo')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="col-12">
        <label for="capacidad" class="form-label">Capacidad</label>
        <input type="number" name="capacidad" class="form-control" id="capacidad">
        @error('capacidad')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="col-12">
        <label for="aerolinea_id" class="form-label">Aerolinea</label>
        <select name="aerolinea_id" class="form-select" id="aerolinea_id">
            @foreach($aerolineas as $item)
            <option value="{{ $item->id_aerolinea }}">{{ $item->nombre }}</option>
            @endforeach
        </select>
        @error('aerolinea_id')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</form>

<br>

@endsection
