<?php

namespace Database\Factories;

use App\Models\Vehiculo;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehiculoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vehiculo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'Placa' => $this->faker->randomElement(['RTY567', 'DFG234', 'TYG098', 'WQA454', 'YHZ675']),
            'Marca' => $this->faker->randomElement(['Ford', 'Mazda', 'Renault', 'Maserati', 'Lamgorghini', 'Chevrolet', 'BMW', 'Mercedez', 'Dodge']),
            'Modelo' => $this->faker->randomElement(['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021']),
            'Numero_sillas' => $this->faker->randomElement(['2','4','6','8','10','15','20','32']),
            'Motor' => $this->faker->randomElement(['Gasolina','Diesel','Electrico','Híbrido']),
            'Estado' => $this->faker->randomElement(['Activo', 'Disponible', 'Reparación']),
            'Medida_ancho' => $this->faker->randomElement(['1','1.5','2','2.5']),
            'Medida_altura' => $this->faker->randomElement(['1','1.5','2','2.5'])

        ];
    }
}
