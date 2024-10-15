
@extends('layout.app')

@section('title', 'Crear Equipaje')

@section('content')
<h1>Crear Equipaje</h1>
<h5>Formulario para crear equipaje</h5>
<hr>
<form class="row g-3" action="{{ route('equipaje.store') }}" method="POST">
    @csrf
    <div class="col-md-6">
        <label for="id_cliente" class="form-label">ID Cliente</label>
        <input type="text" name="id_cliente" class="form-control" id="id_cliente" required>
        @error('id_cliente')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="id_vuelo" class="form-label">ID Vuelo</label>
        <input type="text" name="id_vuelo" class="form-control" id="id_vuelo" required>
        @error('id_vuelo')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="peso" class="form-label">Peso (kg)</label>
        <input type="number" name="peso" class="form-control" id="peso" required>
        @error('peso')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="dimensiones" class="form-label">Dimensiones (cm)</label>
        <input type="text" name="dimensiones" class="form-control" id="dimensiones" required>
        @error('dimensiones')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="cantidad" class="form-label">Cantidad</label>
        <input type="number" name="cantidad" class="form-control" id="cantidad" required>
        @error('cantidad')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="tipo" class="form-label">Tipo</label>
        <input type="text" name="tipo" class="form-control" id="tipo" required>
        @error('tipo')
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
