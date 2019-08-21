@extends('layout')

@section('title', "Especialidad {$specialty->id}")

@section('content')
    <h1>Especialidad #{{ $specialty->id }}</h1>

    <p>Nombre de la especialidad: {{ $specialty->specialty }}</p>
    <p>Descripcion: {{ $specialty->description }}</p>

    <p>
        <a href="{{ route('specialties.index') }}">Regresar al listado de especialidades</a>
    </p>
@endsection
