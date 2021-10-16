<?php

namespace Database\Factories;

use App\Models\Ficha_tecnica;
use Illuminate\Database\Eloquent\Factories\Factory;

class Ficha_tecnicaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ficha_tecnica::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'fecha_creacion' => $this->faker->date(),
            'Propietario' => $this->faker->Name(),
            'Soat' => $this->faker->numberBetween(100000000, 999999999),
            'Tecnomecanica' => $this->faker->numberBetween(100000000, 999999999),
            'Id_vehiculo' => $this->faker->numberBetween(1, 50)
        ];
    }
}
