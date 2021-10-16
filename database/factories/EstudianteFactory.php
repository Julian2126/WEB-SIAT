<?php

namespace Database\Factories;

use App\Models\Estudiante;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstudianteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Estudiante::class;

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
            'Grado' => $this->faker->numberBetween(0, 11),
            'Edad' => $this->faker->numberBetween(4, 21),
            'Id_ruta' => $this->faker->numberBetween(1, 10)
        ];
    }
}
