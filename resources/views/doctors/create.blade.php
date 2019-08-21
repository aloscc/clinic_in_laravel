@extends('layout')

@section('title', "Crear Doctores")

@section('content')
    <div class="card">
        <h4 class="card-header">Crear Medico</h4>
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

            <form method="POST" action="{{ url('doctors') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Pedro Perez" value="{{ old('name') }}">
                </div>

                <div class="form-group">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="pedro@example.com" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label for="phone">Telefono:</label>
                    <input type="number" class="form-control" name="phone" id="phone" placeholder="Mayor a 6 caracteres">
                </div>
                <div class="form-group">
                    <label for="document">Documento:</label>
                    <input type="number" class="form-control" name="document" id="document" placeholder="Mayor a 6 caracteres">
                </div>
                <button type="submit" class="btn btn-primary">Crear medico</button>
                <a href="{{ route('doctors.index') }}" class="btn btn-link">Regresar al listado de doctores</a>
            </form>
        </div>
    </div>
@endsection
