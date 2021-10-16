<?php

namespace Database\Factories;

use App\Models\Rutas;
use Illuminate\Database\Eloquent\Factories\Factory;

class RutasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rutas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'Numero_ruta' => $this->faker->unique()->numberBetween(1, 999),
            'Numero_estudiantes' => $this->faker->numberBetween(1, 39),
            'Origen' => $this->faker->randomElement(['Funza', 'Mosquera', 'Facatativa', 'Madrid', 'Bogogta', 'Bojaca', 'Cota', 'El Rosal', 'Alban', 'San Juan', 'Girardot']),
            'Latitud_origen' => $this->faker->latitude($min=-90,$max=90),
            'Longitud_origen' => $this->faker->latitude($min=-90,$max=90),
            'Destino' => $this->faker->randomElement(['Funza', 'Mosquera', 'Facatativa', 'Madrid', 'Bogogta', 'Bojaca', 'Cota', 'El Rosal', 'Alban', 'San Juan', 'Girardot']),
            'Latitud_destino' => $this->faker->latitude($min=-90,$max=90),
            'Longitud_destino' => $this->faker->latitude($min=-90,$max=90),
            'vehiculo_id' => $this->faker->numberBetween(1, 9),
        ];
    }
}
