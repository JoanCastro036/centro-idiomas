@extends('layouts.app')

@section('contenido')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h2 class="h5 mb-0">Nueva Inscripción</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('estudiantes.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nombre Completo</label>
                            <input type="text" name="nombre_completo" class="form-control" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Teléfono</label>
                                <input type="text" name="telefono" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Idioma</label>
                                <input type="text" name="idioma" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nivel Actual</label>
                                <input type="text" name="nivel_actual" class="form-control" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Guardar Registro</button>
                        <a href="{{ route('estudiantes.index') }}" class="btn btn-link w-100 mt-2 text-decoration-none">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
