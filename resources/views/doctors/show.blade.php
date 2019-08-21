@extends('layout')

@section('title', "Medico {$doctor->id}")

@section('content')
    <h1>Medico #{{ $doctor->id }}</h1>

    <p>Nombre del doctor: {{ $doctor->name }}</p>
    <p>Correo electrónico: {{ $doctor->email }}</p>

    <p>
        <a href="{{ route('doctors.index') }}">Regresar al listado de medicos</a>
    </p>
@endsection
