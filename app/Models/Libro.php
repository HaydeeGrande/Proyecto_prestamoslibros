<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'fecha_adquisicion', 'estado',
    ];
}
