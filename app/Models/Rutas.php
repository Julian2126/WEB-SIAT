<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vehiculo;

class Rutas extends Model
{
    use HasFactory;

    public function rvehiculo(){
        // return $this->belongsTo(Vehiculo::class, 'Vehiculo_Placa', 'Placa');
    }

    protected $fillable = [
        'id',
        'Numero_ruta',
        'Numero_estudiantes',
        'Origen',
        'Latitud_origen',
        'Longitud_origen',
        'Destino',
        'Latitud_destino',
        'Longitud_destino',
        'vehiculo_id'
    ];
}
