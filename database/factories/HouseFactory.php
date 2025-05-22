<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class HouseFactory extends Factory
{

    public function definition() :array
    {
        return [
            'title' => fake()->name(),
            'description' => fake()->name(),
            'price' => 100000.0,
            'rooms' => 20,
            'surface' => 120.0,
        ];
    }
}
