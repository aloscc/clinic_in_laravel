@extends('layout')

@section('title', 'Especialidades')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1">{{ $title }}</h1>
        <p>
            <a href="{{ route('specialties.create') }}" class="btn btn-primary">Nuevo Especialidad</a>
        </p>
    </div>

    @if ($specialties->isNotEmpty())
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Especialidad</th>
            <th scope="col">Descripcion</th>
        </tr>
        </thead>
        <tbody>
        @foreach($specialties as $specialty)
        <tr>
            <th scope="row">{{ $specialty->id }}</th>
            <td>{{ $specialty->specialty }}</td>
            <td>{{ $specialty->description }}</td>
            <td>
                <form action="{{ route('specialties.destroy', $specialty) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{ route('specialties.show', $specialty) }}" class="btn btn-link"><span class="oi oi-eye"></span></a>
                    <a href="{{ route('specialties.edit', $specialty) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                    <button type="submit" class="btn btn-link"><span class="oi oi-trash"></span></button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @else
        <p>No hay especialidades registrados.</p>
    @endif
@endsection

@section('sidebar')
    @parent
@endsection
