<?php

use Illuminate\Database\Migrations\Migration; // Importa la clase Migration de Laravel
use Illuminate\Database\Schema\Blueprint; // Importa la clase Blueprint de Laravel
use Illuminate\Support\Facades\Schema; // Importa la clase Schema de Laravel

// Devuelve una nueva instancia anónima de la clase Migration
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Crea una nueva tabla llamada 'libros'
        Schema::create('libros', function (Blueprint $table) {
            $table->id(); // Crea un campo de identificación única
            $table->string('nombre'); // Crea un campo de texto llamado 'nombre'
            $table->text('descripcion'); // Crea un campo de texto largo llamado 'descripcion'
            $table->date('fecha_adquisicion'); // Crea un campo de fecha llamado 'fecha_adquisicion'
            $table->enum('estado', ['Disponible', 'Prestado', 'Mantenimiento', 'No Disponible', ]); // Crea un campo de enumeración llamado 'estado' con opciones definidas
            $table->timestamps(); // Crea dos campos de marca de tiempo 'created_at' y 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Elimina la tabla 'libros' si existe
        Schema::dropIfExists('libros');
    }
};
