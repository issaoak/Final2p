@extends('layouts.plantillaNav')
@section('Titulo','FormularioContacto')

@section('contenido')
@if(session('exito'))
    <div class="alert alert-success">
        {{ session('exito') }}
    </div>
@endif
<body>

    <div class="container">

    <h1 class="display-1 text-prmiary text-center">Gestión de Contactos </h1>

    <form action="{{ route('rutaenviar')}}" method="POST">
        <div  class="mb-3" >
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="txtnombre" >
        </div>

        <div  class="mb-3" >
            <label for="correo" class="form-label" >Correo:</label>
            <input type="text" class="form-control" name="txtcorreo" >
        </div>

        <div class="mb-3" >
            <label for="telefono" class="form-label" >Telefono:</label>
            <input type="text" class="form-control" name="txttelefono" >
        </div>

        <button type="submit" class="btn btn-danger">Agregar Contacto</button>
    </form>
</body>
@endsection