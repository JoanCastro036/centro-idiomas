<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    // Ver todos los estudiantes registrados
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', compact('estudiantes'));
    }

    // Formulario para nueva inscripción
    public function create()
    {
        return view('estudiantes.create');
    }

    // Guardar los datos en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre_completo' => 'required',
            'telefono' => 'required',
            'email' => 'required|email',
            'idioma' => 'required',
            'nivel_actual' => 'required',
        ]);

        Estudiante::create($request->all());

        return redirect()->route('estudiantes.index')->with('success', 'Inscripción exitosa');
    }

    // Formulario para corregir errores (Requisito de Daniela)
    public function edit($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        return view('estudiantes.edit', compact('estudiante'));
    }

    // Guardar las correcciones
    public function update(Request $request, $id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->update($request->all());

        return redirect()->route('estudiantes.index')->with('success', 'Datos actualizados');
    }
}
