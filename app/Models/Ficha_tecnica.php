<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha_tecnica extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'fecha_creacion',
        'Propietario',
        'Soat',
        'Tecnomecanica',
        'Id_vehiculo'
    ];


}
