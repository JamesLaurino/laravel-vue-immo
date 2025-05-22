<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{

    public function definition()
    {
        return [
            'url' => fake()->imageUrl()
        ];
    }
}
