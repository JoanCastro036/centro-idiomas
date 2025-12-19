@extends('layouts.app')

@section('contenido')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="h4">Lista de Estudiantes</h2>
        <a href="{{ route('estudiantes.create') }}" class="btn btn-primary btn-sm">Nueva Inscripción</a>
    </div>

    <div class="table-responsive shadow-sm bg-white p-2 rounded">
        <table class="table table-hover align-middle">
            <thead class="table-light">
            <tr>
                <th>Nombre</th>
                <th>Idioma</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($estudiantes as $estudiante)
                <tr>
                    <td><strong>{{ $estudiante->nombre_completo }}</strong></td>
                    <td>{{ $estudiante->idioma }} ({{ $estudiante->nivel_actual }})</td>
                    <td><span class="badge rounded-pill bg-info text-dark">{{ $estudiante->estado }}</span></td>
                    <td>
                        <a href="{{ route('estudiantes.edit', $estudiante->id) }}" class="btn btn-sm btn-outline-warning">Corregir</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
