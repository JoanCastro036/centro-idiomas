@extends('layouts.app')

@section('contenido')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Control de Estudiantes</h1>
        <a href="{{ route('estudiantes.create') }}" class="btn btn-primary">Inscribir Nuevo</a>
    </div>

    <div class="table-responsive shadow-sm bg-white p-3 rounded">
        <table class="table table-hover">
            <thead class="table-dark">
            <tr>
                <th>Nombre Completo</th>
                <th>Idioma</th>
                <th>Nivel</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($estudiantes as $estudiante)
                <tr>
                    <td>{{ $estudiante->nombre_completo }}</td>
                    <td>{{ $estudiante->idioma }}</td>
                    <td>{{ $estudiante->nivel_actual }}</td>
                    <td>
                    <span class="badge {{ $estudiante->estado == 'activo' ? 'bg-success' : 'bg-secondary' }}">
                        {{ ucfirst($estudiante->estado) }}
                    </span>
                    </td>
                    <td>
                        <a href="{{ route('estudiantes.edit', $estudiante->id) }}" class="btn btn-sm btn-warning">Corregir</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
