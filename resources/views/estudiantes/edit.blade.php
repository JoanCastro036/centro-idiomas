@extends('layouts.app')

@section('contenido')
    <h2 class="h4 mb-3">Corregir Datos</h2>
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('estudiantes.update', $estudiante->id) }}" method="POST">
                @csrf @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Nombre Completo</label>
                    <input type="text" name="nombre_completo" class="form-control" value="{{ $estudiante->nombre_completo }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Estado del Estudiante</label>
                    <select name="estado" class="form-select">
                        <option value="activo" {{ $estudiante->estado == 'activo' ? 'selected' : '' }}>Activo</option>
                        <option value="pausado" {{ $estudiante->estado == 'pausado' ? 'selected' : '' }}>Pausado</option>
                        <option value="graduado" {{ $estudiante->estado == 'graduado' ? 'selected' : '' }}>Graduado</option>
                        <option value="retirado" {{ $estudiante->estado == 'retirado' ? 'selected' : '' }}>Retirado</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary w-100">Actualizar Registro</button>
            </form>
        </div>
    </div>
@endsection
