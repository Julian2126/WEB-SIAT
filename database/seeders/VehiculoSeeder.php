<?php

namespace Database\Seeders;

use App\Models\Vehiculo;
use Illuminate\Database\Seeder;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $seedVehiculos = new Vehiculo();

        // $seedVehiculos->id = 1;
        // $seedVehiculos->Placa = "123ABC";
        // $seedVehiculos->Marca = "Ford";
        // $seedVehiculos->Modelo = 2020;
        // $seedVehiculos->Numero_sillas = 32;
        // $seedVehiculos->Motor = "Diesel";
        // $seedVehiculos->Estado = "Activo";
        // $seedVehiculos->Medida_ancho = "1.5";
        // $seedVehiculos->Medida_altura = "2";

        // $seedVehiculos->save();


        // $seedVehiculos2 = new Vehiculo();

        // $seedVehiculos2->id = 2;
        // $seedVehiculos2->Placa = "546YUI";
        // $seedVehiculos2->Marca = "Mazda";
        // $seedVehiculos2->Modelo = 2021;
        // $seedVehiculos2->Numero_sillas = 20;
        // $seedVehiculos2->Motor = "Gasolina";
        // $seedVehiculos2->Estado = "Activo";
        // $seedVehiculos2->Medida_ancho = "2.5";
        // $seedVehiculos2->Medida_altura = "2";

        // $seedVehiculos2->save();


        // $seedVehiculos3 = new Vehiculo();

        // $seedVehiculos3->id = 3;
        // $seedVehiculos3->Placa = "678HJK";
        // $seedVehiculos3->Marca = "Ford";
        // $seedVehiculos3->Modelo = 2009;
        // $seedVehiculos3->Numero_sillas = 32;
        // $seedVehiculos3->Motor = "Electrico";
        // $seedVehiculos3->Estado = "Activo";
        // $seedVehiculos3->Medida_ancho = "1";
        // $seedVehiculos3->Medida_altura = "2";

        // $seedVehiculos3->save();


        // $seedVehiculos4 = new Vehiculo();

        // $seedVehiculos4->id = 4;
        // $seedVehiculos4->Placa = "CRF098";
        // $seedVehiculos4->Marca = "Maserati";
        // $seedVehiculos4->Modelo = 2020;
        // $seedVehiculos4->Numero_sillas = 4;
        // $seedVehiculos4->Motor = "Gasolina";
        // $seedVehiculos4->Estado = "Disponible";
        // $seedVehiculos4->Medida_ancho = "1.5";
        // $seedVehiculos4->Medida_altura = "2";

        // $seedVehiculos4->save();


        // $seedVehiculos5 = new Vehiculo();

        // $seedVehiculos5->id = 5;
        // $seedVehiculos5->Placa = "MHT693";
        // $seedVehiculos5->Marca = "Lamborghini";
        // $seedVehiculos5->Modelo = 2021;
        // $seedVehiculos5->Numero_sillas = 2;
        // $seedVehiculos5->Motor = "Gasolina";
        // $seedVehiculos5->Estado = "Activo";
        // $seedVehiculos5->Medida_ancho = "1";
        // $seedVehiculos5->Medida_altura = "2";

        // $seedVehiculos5->save();

        

        Vehiculo::factory(100)->create();

    }
}
