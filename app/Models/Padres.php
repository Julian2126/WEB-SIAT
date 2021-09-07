<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Padres extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'Cedula_padre',
        'Nombre',
        'Apellido',
        'Telefono',
        'Email',
        'Id_estudiante'
    ];
}
