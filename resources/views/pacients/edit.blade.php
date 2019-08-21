@extends('layout')

@section('title', "Editar paciente")

@section('content')
    <h1>Editar paciente</h1>

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

    <form method="POST" action="{{ url("pacients/{$pacient->id}") }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        <label for="name">Nombre:</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Pedro Perez" value="{{ old('name', $pacient->name) }}">
        <br>
        <div class="form-group">
                    <label for="num_document">Documento:</label>
                    <input type="number" class="form-control" name="num_document" id="num_document" placeholder="3234234" value="{{ old('num_document', $pacient->num_document) }}"> 
        <br>
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="pedro@example.com" value="{{ old('email', $pacient->email) }}">
        <br>
                    <label for="age">Edad:</label>
                    <input type="number" class="form-control" name="age" id="age" placeholder="43" value="{{ old('age', $pacient->age) }}">
                <br>
                  <label for="born_date">Fecha Nac.:</label>
                    <input type="date" class="form-control" name="born_date" id="born_date" placeholder="21/12/2010" value="{{ old('born_date', $pacient->born_date) }}">
            <br>
                  <label for="city_born">Ciudad Nac.:</label>
                    <input type="string" class="form-control" name="city_born" id="city_born" placeholder="Arequipa" value="{{ old('city_born', $pacient->city_born) }}">
        <br>
        <button type="submit">Actualizar paciente</button>
    </form>

    <p>
        <a href="{{ route('pacients.index') }}">Regresar al listado de pacientes</a>
    </p>
@endsection
