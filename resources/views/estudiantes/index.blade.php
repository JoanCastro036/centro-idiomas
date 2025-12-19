@extends('layouts.app')

@section('contenido')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Panel de Estudiantes - Speak Easy</h1>
        <a href="{{ route('estudiantes.create') }}" class="btn btn-primary">Nueva Inscripción</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                    <tr>
                        <th>Nombre</th>
                        <th>Idioma</th>
                        <th>Estado</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($estudiantes as $estudiante)
                        <tr>
                            <td><strong>{{ $estudiante->nombre_completo }}</strong></td>
                            <td>{{ $estudiante->idioma }} ({{ $estudiante->nivel_actual }})</td>
                            <td>
                            <span class="badge rounded-pill {{ $estudiante->estado == 'activo' ? 'bg-success' : 'bg-secondary' }}">
                                {{ ucfirst($estudiante->estado) }}
                            </span>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('estudiantes.edit', $estudiante->id) }}" class="btn btn-sm btn-outline-warning">Corregir</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-4 text-muted">No hay estudiantes registrados aún.</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
