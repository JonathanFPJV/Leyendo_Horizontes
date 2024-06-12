<?php

// database/factories/LibroFactory.php
namespace Database\Factories;

use App\Models\Libro;
use Illuminate\Database\Eloquent\Factories\Factory;

class LibroFactory extends Factory
{
    protected $model = Libro::class;

    public function definition()
    {
        $disponibilidad = $this->faker->boolean;

        return [
            'nombre' => $this->faker->sentence,
            'anio' => $this->faker->year,
            'autor' => $this->faker->name,
            'editorial' => $this->faker->company,
            'stock' => $disponibilidad ? $this->faker->numberBetween(1, 100) : 0,
            'disponibilidad' => $disponibilidad,
        ];
    }
}

