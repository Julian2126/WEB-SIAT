<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instituciones extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'Nit',
        'Nombre',
        'Telefono',
        'Email',
        'Id_estudiante'
    ];
}
