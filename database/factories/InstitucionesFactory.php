<?php

namespace Database\Factories;

use App\Models\Instituciones;
use Illuminate\Database\Eloquent\Factories\Factory;

class InstitucionesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Instituciones::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'Nit' => $this->faker->numberBetween(100000000, 999999999),
            'Nombre' => $this->faker->name(),
            'Telefono' => $this->faker->numberBetween(100000000, 999999999),
            'Email' => $this->faker->unique()->safeEmail(),
            'Id_estudiante' => $this->faker->numberBetween(1, 10)
        ];
    }
}
