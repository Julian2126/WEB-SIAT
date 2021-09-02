<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rutas extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'Numero_ruta',
        'Numero_estudiantes',
        'Hubicacion_gps',
        'Origen',
        'Destino',
        'Id_vehiculo'
    ];
}
