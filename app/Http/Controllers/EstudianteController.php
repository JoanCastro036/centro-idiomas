<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', compact('estudiantes'));
    }

    public function create()
    {
        return view('estudiantes.create');
    }

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
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante inscrito con éxito');
    }

    public function edit($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        return view('estudiantes.edit', compact('estudiante'));
    }

    public function update(Request $request, $id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->update($request->all());
        return redirect()->route('estudiantes.index')->with('success', 'Datos actualizados');
    }
}
