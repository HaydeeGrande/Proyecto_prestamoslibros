<?php

namespace App\Listeners;

use App\Events\UsuarioCreado;
use App\Models\Prestamo; // Asegúrate de importar el modelo Prestamo
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CrearPrestamoDesdeUsuarioCreado
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UsuarioCreado $event): void
    {
        // Obtener el usuario recién creado del evento
        $usuario = $event->usuario;

        // Crear un registro de préstamo relacionado
        $prestamo = new Prestamo([
            'fecha_prestamo' => now(),
            // Otros campos de Préstamo
        ]);

        // Asociar el préstamo con el usuario recién creado
        $usuario->prestamos()->save($prestamo);

        // Puedes agregar aquí cualquier otra lógica que necesites para el préstamo
    }
}
