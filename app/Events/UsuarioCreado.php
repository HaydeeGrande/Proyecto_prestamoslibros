<?php

namespace App\Events;

use App\Models\Usuario;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UsuarioCreado
{
    use Dispatchable, SerializesModels;

    public $usuario;

    public function __construct(Usuario $usuario)
    {
        $this->usuario = $usuario;
    }

    public function handle()
    {
        // Crea un nuevo préstamo relacionado con el usuario
        $this->usuario->prestamos()->create([
            'fecha_prestamo' => now(),
            // Agrega otros campos del préstamo
        ]);
    }
}
