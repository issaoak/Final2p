@extends('layouts.plantillaNav')
@section('Titulo','FormularioContacto')

@section('contenido')
@if(session('exito'))
    <div class="alert alert-success">
        {{ session('exito') }}
    </div>
@endif

<div class="container">
    <h1 class="display-1 text-primary text-center">Gestión de Contactos</h1>

    <form action="{{ route('rutaenviar') }}" method="POST">
        @csrf 
        <div class="mb-3">
            <label for="txtnombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control @error('txtnombre') is-invalid @enderror" 
                   name="txtnombre" value="{{ old('txtnombre') }}">
            @error('txtnombre')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="txtcorreo" class="form-label">Correo:</label>
            <input type="text" class="form-control @error('txtcorreo') is-invalid @enderror" 
                   name="txtcorreo" value="{{ old('txtcorreo') }}">
            @error('txtcorreo')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="txttelefono" class="form-label">Teléfono:</label>
            <input type="text" class="form-control @error('txttelefono') is-invalid @enderror" 
                   name="txttelefono" value="{{ old('txttelefono') }}">
            @error('txttelefono')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-danger">Agregar Contacto</button>
    </form>
</div>
@endsection
