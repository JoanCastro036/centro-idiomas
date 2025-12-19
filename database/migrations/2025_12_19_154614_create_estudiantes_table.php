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
            $table->string('nombre_completo');
            $table->string('telefono');
            $table->string('email');
            $table->string('idioma');
            $table->string('nivel_actual');
            $table->string('estado')->default('activo'); // activo, pausado, graduado, retirado
            $table->timestamps(); // Esto crea 'created_at' (fecha de inscripción)
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
