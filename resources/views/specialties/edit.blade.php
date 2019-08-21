@extends('layout')

@section('title', "Editar especialidad")

@section('content')
    <h1>Editar especialidad</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <h6>Por favor corrige los errores debajo:</h6>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ url("specialties/{$specialty->id}") }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        <label for="specialty">Especialidad:</label>
        <input type="text" name="specialty" class="form-control" id="specialty" placeholder="Pediatria" value="{{ old('specialty', $specialty->specialty) }}">
        <br>
        <label for="description">Descripcion:</label>
        <input type="textarea" name="description" class="form-control" id="description" placeholder="description" value="{{ old('email', $specialty->email) }}">
        <br>
        <button type="submit">Actualizar especialidad</button>
    </form>

    <p>
        <a href="{{ route('specialties.index') }}">Regresar al listado de especialidads</a>
    </p>
@endsection
