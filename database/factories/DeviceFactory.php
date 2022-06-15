<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
@extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Device>
 */
class DeviceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(1),
            'marca' => $this->faker->lastname(1),
            'modelo' => $this->faker->number(10),
            'color' => $this->faker->color(1),
            'serie' => $this->faker->number(10),
            'mac'=>$this->faker->number(10),
            'sistemaop'=>$this->faker->name(1),
            'cargador'=>$this->faker->name(),
            'observacion'=>$this->faker->text(20),
        ];
    }
}
