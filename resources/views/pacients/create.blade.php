@extends('layout')

@section('title', "Crear Paciente")

@section('content')
    <div class="card">
        <h4 class="card-header">Crear Paciente</h4>
        <div class="card-body">
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

            <form method="POST" action="{{ url('pacients') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Pedro Perez" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="num_document">Documento:</label>
                    <input type="number" class="form-control" name="num_document" id="num_document" placeholder="3234234" value="{{ old('num_document') }}">
                </div>
                <div class="form-group">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="pedro@example.com" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="age">Edad:</label>
                    <input type="number" class="form-control" name="age" id="age" placeholder="23" value="{{ old('age') }}">
                </div>
                <div class="form-group">
                    <label for="born_date">Fecha Nac.:</label>
                    <input type="date" class="form-control" name="born_date" id="born_date" placeholder="21/12/2010" value="{{ old('born_date') }}">
                </div>
                <div class="form-group">
                    <label for="city_born">Ciudad Nac.:</label>
                    <input type="string" class="form-control" name="city_born" id="city_born" placeholder="Arequipa" value="{{ old('city_born') }}">
                </div>
                <button type="submit" class="btn btn-primary">Crear paciente</button>
                <a href="{{ route('pacients.index') }}" class="btn btn-link">Regresar al listado de pacientes</a>
            </form>
        </div>
    </div>
@endsection
