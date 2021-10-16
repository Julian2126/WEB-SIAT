<?php

namespace Database\Factories;

use App\Models\Monitores;
use Illuminate\Database\Eloquent\Factories\Factory;

class MonitoresFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Monitores::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'Cedula_monitor' => $this->faker->numberBetween(100000000, 999999999),
            'Nombre' => $this->faker->name(),
            'Apellido' => $this->faker->lastName(),
            'Telefono' => $this->faker->numberBetween(100000000, 999999999),
            'Email' => $this->faker->unique()->safeEmail(),
            'Id_ruta' => $this->faker->numberBetween(1, 20)

        ];
    }
}
