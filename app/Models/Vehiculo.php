<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rutas;

class Vehiculo extends Model
{
    use HasFactory;

    public function rrutas(){
        return $this->hasMany(Rutas::class);
    }

    protected $fillable = [
        'id', 'Placa', 'Marca', 'Modelo', 'Numero_sillas', 'Motor', 'Estado', 'Medida_ancho', 'Medida_altura'
    ];
}
