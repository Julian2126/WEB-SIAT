<?php

namespace Database\Factories;

use App\Models\Alertas;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlertasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Alertas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'Tipo' => $this->faker->randomElement(['Rumbo al colegio', 'En el colegio', 'Rumbo a la casa', 'Entregado a acudiente', 'En un trancon', 'Alerta: Llamar a monitor']),
            'Id_monitor' => $this->faker->numberBetween(1, 10),
            'Id_padre' => $this->faker->numberBetween(2, 10)
        ];
    }
}
