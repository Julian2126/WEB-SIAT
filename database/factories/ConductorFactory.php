<?php

namespace Database\Factories;

use App\Models\Conductor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConductorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Conductor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'Numero_identificacion' => $this->faker->numberBetween(100000000, 999999999),
            'Nombre' => $this->faker->name(),
            'Apellido' => $this->faker->lastName(),
            'Licencia_conduccion' => $this->faker->numberBetween(100000000, 999999999),
            'Telefono' => $this->faker->numberBetween(100000000, 999999999),
            'Email' => $this->faker->unique()->safeEmail(),
            'Id_vehiculo' => $this->faker->numberBetween(1, 50)

        ];
    }
}
