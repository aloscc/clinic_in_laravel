@extends('layout')

@section('title', "Editar medico")

@section('content')
    <h1>Editar medico</h1>

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

    <form method="POST" action="{{ url("doctors/{$doctor->id}") }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        <label for="name">Nombre:</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Pedro Perez" value="{{ old('name', $doctor->name) }}">
        <br>
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="pedro@example.com" value="{{ old('email', $doctor->email) }}">
        <br>
                    <label for="phone">Telefono:</label>
                    <input type="number" class="form-control" name="phone" id="phone" placeholder="Mayor a 6 caracteres" value="{{ old('phone', $doctor->phone) }}">
                <br>
                    <label for="document">Documento:</label>
                    <input type="number" class="form-control" name="document" id="document" placeholder="Mayor a 6 caracteres" value="{{ old('document', $doctor->document) }}">
        <br>
        <button type="submit">Actualizar medico</button>
    </form>

    <p>
        <a href="{{ route('doctors.index') }}">Regresar al listado de medicos</a>
    </p>
@endsection
