@extends('layouts.app')

@section('contenido')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow border-warning">
                <div class="card-header bg-warning">
                    <h2 class="h5 mb-0 text-dark">Corregir Registro de Estudiante</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('estudiantes.update', $estudiante->id) }}" method="POST">
                        @csrf
                        @method('PUT')
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
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-warning">Actualizar Datos</button>
                            <a href="{{ route('estudiantes.index') }}" class="btn btn-light border text-dark">Volver</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
