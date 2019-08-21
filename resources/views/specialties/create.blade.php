@extends('layout')

@section('title', "Crear Especialidades")

@section('content')
    <div class="card">
        <h4 class="card-header">Crear Especialidad</h4>
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

            <form method="POST" action="{{ url('specialties') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="specialty">Especialidad:</label>
                    <input type="text" class="form-control" name="specialty" id="specialty" placeholder="Pediatria" value="{{ old('specialty') }}">
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="textarea" class="form-control" name="description" id="description" placeholder="descripcion" value="{{ old('description') }}">
                </div>
                <button type="submit" class="btn btn-primary">Crear especialidad</button>
                <a href="{{ route('specialties.index') }}" class="btn btn-link">Regresar al listado de especialidades</a>
            </form>
        </div>
    </div>
@endsection
