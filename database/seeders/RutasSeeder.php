<?php

namespace Database\Seeders;

use App\Models\Rutas;
use Illuminate\Database\Seeder;

class RutasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        $seedRutas = new Rutas();

        $seedRutas->id = 1;
        $seedRutas->Numero_ruta = 1;
        $seedRutas->Numero_estudiantes = 15;
        $seedRutas->Origen = "Mosquera";
        $seedRutas->Latitud_origen = 4.6847673;
        $seedRutas->Longitud_origen = -74.1250425;
        $seedRutas->Destino = "Facatativa";
        $seedRutas->Latitud_destino = 4.802979;
        $seedRutas->Longitud_destino = -74.3732812;
        $seedRutas->vehiculo_id = 1;
        

        $seedRutas->save();

        

        $seedRutas2 = new Rutas();

        $seedRutas2->id = 2;
        $seedRutas2->Numero_ruta = 2;
        $seedRutas2->Numero_estudiantes = 15;
        $seedRutas2->Origen = "Nueva York";
        $seedRutas2->Latitud_origen = 40.71727401;
        $seedRutas2->Longitud_origen = -74.12504250;
        $seedRutas2->Destino = "Facatativá";
        $seedRutas2->Latitud_destino = 4.802979;
        $seedRutas2->Longitud_destino = -74.3732812;
        $seedRutas2->vehiculo_id = 2;

        $seedRutas2->save();


        $seedRutas3 = new Rutas();

        $seedRutas3->id = 3;
        $seedRutas3->Numero_ruta = 3;
        $seedRutas3->Numero_estudiantes = 11;
        $seedRutas3->Origen = "Funza";
        $seedRutas3->Latitud_origen = 4.716726;
        $seedRutas3->Longitud_origen = -74.214208;
        $seedRutas3->Destino = "Cota";
        $seedRutas3->Latitud_destino = 4.8096881;
        $seedRutas3->Longitud_destino = -74.1058802;
        $seedRutas3->vehiculo_id = 3;

        $seedRutas3->save();


        $seedRutas4 = new Rutas();

        $seedRutas4->id = 4;
        $seedRutas4->Numero_ruta = 4;
        $seedRutas4->Numero_estudiantes = 21;
        $seedRutas4->Origen = "Bojaca";
        $seedRutas4->Latitud_origen = 4.7324638;
        $seedRutas4->Longitud_origen = -74.4117737;
        $seedRutas4->Destino = "Madrid";
        $seedRutas4->Latitud_destino = 4.7344979;
        $seedRutas4->Longitud_destino = -74.3459937;
        $seedRutas4->vehiculo_id = 4;

        $seedRutas4->save();


        $seedRutas5 = new Rutas();

        $seedRutas5->id = 5;
        $seedRutas5->Numero_ruta = 5;
        $seedRutas5->Numero_estudiantes = 18;
        $seedRutas5->Origen = "Funza";
        $seedRutas5->Latitud_origen = 4.7151556;
        $seedRutas5->Longitud_origen = -74.225324;
        $seedRutas5->Destino = "Madrid";
        $seedRutas5->Latitud_destino = 4.7332642;
        $seedRutas5->Longitud_destino = -74.2828287;
        $seedRutas5->vehiculo_id = 5;

        $seedRutas5->save();



        
        $seedRutas6 = new Rutas();
        $seedRutas6->id = 6;
        $seedRutas6->Numero_ruta = 6;
        $seedRutas6->Numero_estudiantes = 20;
        $seedRutas6->Origen = "Funza";
        $seedRutas6->Latitud_origen = 4.7151556;
        $seedRutas6->Longitud_origen = -74.225324;
        $seedRutas6->Destino = "Mosquera";
        $seedRutas6->Latitud_destino = 4.7063771;
        $seedRutas6->Longitud_destino = -74.2432623;
        $seedRutas6->vehiculo_id = 6;

        $seedRutas6->save();




        $seedRutas7 = new Rutas();
        $seedRutas7->id = 7;
        $seedRutas7->Numero_ruta = 7;
        $seedRutas7->Numero_estudiantes = 25;
        $seedRutas7->Origen = "Facatativá";
        $seedRutas7->Latitud_origen = 4.8081957;
        $seedRutas7->Longitud_origen = -74.3806045;
        $seedRutas7->Destino = "El Rosal";
        $seedRutas7->Latitud_destino = 4.8546341;
        $seedRutas7->Longitud_destino = -74.2871157;
        $seedRutas7->vehiculo_id = 7;

        $seedRutas7->save();




        $seedRutas8 = new Rutas();
        $seedRutas8->id = 8;
        $seedRutas8->Numero_ruta = 8;
        $seedRutas8->Numero_estudiantes = 23;
        $seedRutas8->Origen = "Madrid";
        $seedRutas8->Latitud_origen = 4.7332642;
        $seedRutas8->Longitud_origen = -74.2828287;
        $seedRutas8->Destino = "Facatativa";
        $seedRutas8->Latitud_destino = 4.8081957;
        $seedRutas8->Longitud_destino = -74.3806045;
        $seedRutas8->vehiculo_id = 8;

        $seedRutas8->save();




        $seedRutas9 = new Rutas();
        $seedRutas9->id = 9;
        $seedRutas9->Numero_ruta = 9;
        $seedRutas9->Numero_estudiantes = 23;
        $seedRutas9->Origen = "Madrid";
        $seedRutas9->Latitud_origen = 4.7332642;
        $seedRutas9->Longitud_origen = -74.2828287;
        $seedRutas9->Destino = "Facatativa";
        $seedRutas9->Latitud_destino = 4.8081957;
        $seedRutas9->Longitud_destino = -74.3806045;
        $seedRutas9->vehiculo_id = 9;

        $seedRutas9->save();



        $seedRutas10 = new Rutas();
        $seedRutas10->id = 10;
        $seedRutas10->Numero_ruta = 10;
        $seedRutas10->Numero_estudiantes = 23;
        $seedRutas10->Origen = "Madrid";
        $seedRutas10->Latitud_origen = 4.7332642;
        $seedRutas10->Longitud_origen = -74.2828287;
        $seedRutas10->Destino = "Bogota";
        $seedRutas10->Latitud_destino = 4.6774551;
        $seedRutas10->Longitud_destino = -74.2098969;
        $seedRutas10->vehiculo_id = 10;

        $seedRutas10->save();


        $seedRutas11 = new Rutas();

        $seedRutas11->id = 11;
        $seedRutas11->Numero_ruta = 11;
        $seedRutas11->Numero_estudiantes = 25;
        $seedRutas11->Origen = "Mosquera";
        $seedRutas11->Latitud_origen = 4.6847673;
        $seedRutas11->Longitud_origen = -74.1250425;
        $seedRutas11->Destino = "Facatativa";
        $seedRutas11->Latitud_destino = 4.802979;
        $seedRutas11->Longitud_destino = -74.3732812;
        $seedRutas11->vehiculo_id = 11;
        

        $seedRutas11->save();



        $seedRutas12 = new Rutas();

        $seedRutas12->id = 12;
        $seedRutas12->Numero_ruta = 12;
        $seedRutas12->Numero_estudiantes = 15;
        $seedRutas12->Origen = "Mosquera";
        $seedRutas12->Latitud_origen = 4.6847673;
        $seedRutas12->Longitud_origen = -74.1250425;
        $seedRutas12->Destino = "Facatativa";
        $seedRutas12->Latitud_destino = 4.802979;
        $seedRutas12->Longitud_destino = -74.3732812;
        $seedRutas12->vehiculo_id = 12;
        
        $seedRutas12->save();


        $seedRutas13 = new Rutas();

        $seedRutas13->id = 13;
        $seedRutas13->Numero_ruta = 13;
        $seedRutas13->Numero_estudiantes = 21;
        $seedRutas13->Origen = "Funza";
        $seedRutas13->Latitud_origen = 4.716726;
        $seedRutas13->Longitud_origen = -74.214208;
        $seedRutas13->Destino = "Cota";
        $seedRutas13->Latitud_destino = 4.8096881;
        $seedRutas13->Longitud_destino = -74.1058802;
        $seedRutas13->vehiculo_id = 13;

        $seedRutas13->save();


        $seedRutas14 = new Rutas();

        $seedRutas14->id = 14;
        $seedRutas14->Numero_ruta = 14;
        $seedRutas14->Numero_estudiantes = 11;
        $seedRutas14->Origen = "Bojaca";
        $seedRutas14->Latitud_origen = 4.7324638;
        $seedRutas14->Longitud_origen = -74.4117737;
        $seedRutas14->Destino = "Madrid";
        $seedRutas14->Latitud_destino = 4.7344979;
        $seedRutas14->Longitud_destino = -74.3459937;
        $seedRutas14->vehiculo_id = 14;

        $seedRutas14->save();


        $seedRutas15 = new Rutas();

        $seedRutas15->id = 15;
        $seedRutas15->Numero_ruta = 15;
        $seedRutas15->Numero_estudiantes = 28;
        $seedRutas15->Origen = "Funza";
        $seedRutas15->Latitud_origen = 4.7151556;
        $seedRutas15->Longitud_origen = -74.225324;
        $seedRutas15->Destino = "Madrid";
        $seedRutas15->Latitud_destino = 4.7332642;
        $seedRutas15->Longitud_destino = -74.2828287;
        $seedRutas15->vehiculo_id = 15;

        $seedRutas15->save();



        
        $seedRutas16 = new Rutas();
        $seedRutas16->id = 16;
        $seedRutas16->Numero_ruta = 16;
        $seedRutas16->Numero_estudiantes = 20;
        $seedRutas16->Origen = "Funza";
        $seedRutas16->Latitud_origen = 4.7151556;
        $seedRutas16->Longitud_origen = -74.225324;
        $seedRutas16->Destino = "Mosquera";
        $seedRutas16->Latitud_destino = 4.7063771;
        $seedRutas16->Longitud_destino = -74.2432623;
        $seedRutas16->vehiculo_id = 16;

        $seedRutas16->save();




        $seedRutas17 = new Rutas();
        $seedRutas17->id = 17;
        $seedRutas17->Numero_ruta = 17;
        $seedRutas17->Numero_estudiantes = 25;
        $seedRutas17->Origen = "Facatativa";
        $seedRutas17->Latitud_origen = 4.8081957;
        $seedRutas17->Longitud_origen = -74.3806045;
        $seedRutas17->Destino = "El Rosal";
        $seedRutas17->Latitud_destino = 4.8546341;
        $seedRutas17->Longitud_destino = -74.2871157;
        $seedRutas17->vehiculo_id = 17;

        $seedRutas17->save();




        $seedRutas18 = new Rutas();
        $seedRutas18->id = 18;
        $seedRutas18->Numero_ruta = 18;
        $seedRutas18->Numero_estudiantes = 23;
        $seedRutas18->Origen = "Madrid";
        $seedRutas18->Latitud_origen = 4.7332642;
        $seedRutas18->Longitud_origen = -74.2828287;
        $seedRutas18->Destino = "Facatativa";
        $seedRutas18->Latitud_destino = 4.8081957;
        $seedRutas18->Longitud_destino = -74.3806045;
        $seedRutas18->vehiculo_id = 18;

        $seedRutas18->save();




        $seedRutas19 = new Rutas();
        $seedRutas19->id = 19;
        $seedRutas19->Numero_ruta = 19;
        $seedRutas19->Numero_estudiantes = 23;
        $seedRutas19->Origen = "Madrid";
        $seedRutas19->Latitud_origen = 4.7332642;
        $seedRutas19->Longitud_origen = -74.2828287;
        $seedRutas19->Destino = "Facatativa";
        $seedRutas19->Latitud_destino = 4.8081957;
        $seedRutas19->Longitud_destino = -74.3806045;
        $seedRutas19->vehiculo_id = 19;

        $seedRutas19->save();



        $seedRutas20 = new Rutas();
        $seedRutas20->id = 20;
        $seedRutas20->Numero_ruta = 20;
        $seedRutas20->Numero_estudiantes = 23;
        $seedRutas20->Origen = "Madrid";
        $seedRutas20->Latitud_origen = 4.7332642;
        $seedRutas20->Longitud_origen = -74.2828287;
        $seedRutas20->Destino = "Bogota";
        $seedRutas20->Latitud_destino = 4.6774551;
        $seedRutas20->Longitud_destino = -74.2098969;
        $seedRutas20->vehiculo_id = 20;

        $seedRutas20->save();




        // Rutas::factory(10)->create();
    }
}
