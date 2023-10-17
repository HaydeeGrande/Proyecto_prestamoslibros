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
        // Crea una nueva tabla llamada 'prestamos'
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id(); // Crea un campo de identificación única
            $table->date('fecha_prestamo'); // Crea un campo de fecha llamado 'fecha_prestamo'
            $table->date('fecha_devolucion')->nullable(); // Crea un campo de fecha llamado 'fecha_devolucion' que puede ser nulo
            $table->unsignedBigInteger('usuario_id'); // Crea un campo de número entero sin signo llamado 'usuario_id'
            $table->unsignedBigInteger('libro_id'); // Crea un campo de número entero sin signo llamado 'libro_id'
            $table->timestamps(); // Crea dos campos de marca de tiempo 'created_at' y 'updated_at'

            // Define las claves foráneas para 'usuario_id' y 'libro_id' que hacen referencia a las tablas 'usuarios' y 'equipos'
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('libro_id')->references('id')->on('libros');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Elimina la tabla 'prestamos' si existe
        Schema::dropIfExists('prestamos');
    }
};
