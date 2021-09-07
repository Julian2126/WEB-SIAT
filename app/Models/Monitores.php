<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitores extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'Cedula_monitor',
        'Nombre',
        'Apellido',
        'Telefono',
        'Email',
        'Id_ruta'
    ];
}
