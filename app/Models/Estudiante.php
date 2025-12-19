<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $table = 'estudiantes';

    // Estos son los campos obligatorios del Caso 24
    protected $fillable = [
        'nombre_completo',
        'telefono',
        'email',
        'idioma',
        'nivel_actual',
        'estado'
    ];
}
