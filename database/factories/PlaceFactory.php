<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlaceFactory extends Factory
{

    public function definition() : array
    {
        return [
            'street' => fake()->name(),
            'bte' => fake()->name(),
            'city' => fake()->city(),
            'code' => fake()->postcode(),
            'country' => "BE"
        ];
    }
}
