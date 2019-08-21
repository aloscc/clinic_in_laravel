@extends('layout')

@section('title', 'Pacientes')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1">{{ $title }}</h1>
        <p>
            <a href="{{ route('pacients.create') }}" class="btn btn-primary">Nuevo Paciente</a>
        </p>
    </div>

    @if ($pacients->isNotEmpty())
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Documento</th>
            <th scope="col">Email</th>
            <th scope="col">Edad</th>
            <th scope="col">Nacimiento</th>
            <th scope="col">Ciudad Nac.</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pacients as $pacient)
        <tr>
            <th scope="row">{{ $pacient->id }}</th>
            <td>{{ $pacient->name }}</td>
            <td>{{ $pacient->num_document }}</td>
            <td>{{ $pacient->email }}</td>
            <td>{{ $pacient->age }}</td>
            <td>{{ $pacient->born_date }}</td>
            <td>{{ $pacient->city_born }}</td>
            <td>
                <form action="{{ route('pacients.destroy', $pacient) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{ route('pacients.show', $pacient) }}" class="btn btn-link"><span class="oi oi-eye"></span></a>
                    <a href="{{ route('pacients.edit', $pacient) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                    <button type="submit" class="btn btn-link"><span class="oi oi-trash"></span></button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @else
        <p>No hay pacientes registrados.</p>
    @endif
@endsection

@section('sidebar')
    @parent
@endsection
