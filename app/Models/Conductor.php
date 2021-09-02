<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'Numero_identificacion',
        'Nombre',
        'Apellido',
        'Licencia_conduccion',
        'Telefono',
        'Email',
        'Id_vehiculo'
    ];
}
