<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alertas extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'Tipo',
        'Remitente',
        'Receptor',
        'Id_monitor',
        'Id_padre'
    ];
}
