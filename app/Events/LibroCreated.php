<?php

namespace App\Events;

use App\Models\Libro;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class LibroCreated
{
    use Dispatchable;

    public $libro;

    public function __construct(Libro $libro)
    {
        $this->libro = $libro;
    }

    public function handle()
    {
        // Crea un nuevo préstamo relacionado con el equipo
        $this->libro->prestamos()->create([
            // Agrega los campos necesarios del préstamo
            'fecha_prestamo' => now(),
            // Otros campos del préstamo
        ]);
    }
}
