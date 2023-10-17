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
        // Crea una nueva tabla llamada 'usuarios'
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id(); // Crea un campo de identificación única
            $table->string('nombre'); // Crea un campo de texto llamado 'nombre'
            $table->string('correo_electronico')->unique(); // Crea un campo de texto llamado 'correo_electronico' y asegura que sea único
            // Puedes agregar otros campos de usuario según tus necesidades aquí
            $table->timestamps(); // Crea dos campos de marca de tiempo 'created_at' y 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Elimina la tabla 'usuarios' si existe
        Schema::dropIfExists('usuarios');
    }
};
