@extends('layout')

@section('title', 'Doctores')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1">{{ $title }}</h1>
        <p>
            <a href="{{ route('doctors.create') }}" class="btn btn-primary">Nuevo Doctor</a>
        </p>
    </div>

    @if ($doctors->isNotEmpty())
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
        </tr>
        </thead>
        <tbody>
        @foreach($doctors as $doctor)
        <tr>
            <th scope="row">{{ $doctor->id }}</th>
            <td>{{ $doctor->name }}</td>
            <td>{{ $doctor->email }}</td>
            <td>
                <form action="{{ route('doctors.destroy', $doctor) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{ route('doctors.show', $doctor) }}" class="btn btn-link"><span class="oi oi-eye"></span></a>
                    <a href="{{ route('doctors.edit', $doctor) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                    <button type="submit" class="btn btn-link"><span class="oi oi-trash"></span></button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @else
        <p>No hay doctores registrados.</p>
    @endif
@endsection

@section('sidebar')
    @parent
@endsection
