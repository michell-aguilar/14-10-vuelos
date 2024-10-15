
@extends('layout.app')

@section('title', 'Crear Pago')

@section('content')
<h1>Crear Pago</h1>
<h5>Formulario para crear pago</h5>
<hr>
<form class="row g-3" action="{{ route('pago.store') }}" method="POST">
    @csrf
    <div class="col-md-6">
        <label for="id_reservacion" class="form-label">ID Reservación</label>
        <input type="text" name="id_reservacion" class="form-control" id="id_reservacion" required>
        @error('id_reservacion')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="monto" class="form-label">Monto</label>
        <input type="number" name="monto" class="form-control" id="monto" required>
        @error('monto')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="fecha_pago" class="form-label">Fecha de Pago</label>
        <input type="date" name="fecha_pago" class="form-control" id="fecha_pago" required>
        @error('fecha_pago')
        <span class="invalid-feedback d-block" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="metodo_pago" class="form-label">Método de Pago</label>
        <input type="text" name="metodo_pago" class="form-control" id="metodo_pago" required>
        @error('metodo_pago')
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
