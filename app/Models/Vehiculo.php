<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'Placa', 'Marca', 'Modelo', 'Numero_sillas', 'Motor', 'Estado', 'Medida_ancho', 'Medida_altura'
    ];
}
