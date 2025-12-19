@extends('layouts.app')

@section('contenido')
    <h2 class="h4 mb-3">Registrar Nuevo Estudiante</h2>
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('estudiantes.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nombre Completo</label>
                    <input type="text" name="nombre_completo" class="form-control" required>
                </div>
                <div class="row mb-3">
                    <div class="col-6"><label class="form-label">Teléfono</label><input type="text" name="telefono" class="form-control" required></div>
                    <div class="col-6"><label class="form-label">Email</label><input type="email" name="email" class="form-control" required></div>
                </div>
                <div class="row mb-3">
                    <div class="col-6"><label class="form-label">Idioma</label><input type="text" name="idioma" class="form-control" required></div>
                    <div class="col-6"><label class="form-label">Nivel Actual</label><input type="text" name="nivel_actual" class="form-control" required></div>
                </div>
                <button type="submit" class="btn btn-success w-100">Guardar Estudiante</button>
            </form>
        </div>
    </div>
@endsection
