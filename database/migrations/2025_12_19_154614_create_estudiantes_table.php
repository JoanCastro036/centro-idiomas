<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_completo'); // Requisito: Nombre solicitado
            $table->string('telefono');        // Requisito: Teléfono solicitado
            $table->string('email');           // Requisito: Email solicitado
            $table->string('idioma');          // Requisito: Idioma solicitado
            $table->string('nivel_actual');    // Requisito: Nivel solicitado
            // El estado permite no borrar registros como pidió el director
            $table->enum('estado', ['activo', 'pausado', 'graduado', 'retirado'])->default('activo');
            $table->timestamps(); // Registra fecha de inscripción automáticamente
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
