@extends('layout')

@section('title', "Paciente {$pacient->id}")

@section('content')
    <h1>Paciente #{{ $pacient->id }}</h1>

    <p>Nombre del paciente: {{ $pacient->name }}</p>
    <p>Documento del paciente: {{ $pacient->num_document }}</p>
    <p>Correo electrónico: {{ $pacient->email }}</p>
    <p>Edad del paciente: {{ $pacient->age }}</p>
    <p>Fecha de Naciento: {{ $pacient->born_date }}</p>
    <p>Ciudad de Naciento: {{ $pacient->city_born }}</p>
    <p>
        <a href="{{ route('pacients.index') }}">Regresar al listado de pacientes</a>
    </p>
@endsection
