<?php

namespace Database\Seeders;

use App\Models\House;
use App\Models\Image;
use App\Models\Place;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        House::factory()->create([
            'title' => 'House 1',
            'description' => 'House 1 description',
            'price' => 100000.0,
            'rooms'=> 6,
            'surface' => 100

        ]);

        Image::factory()->create([
           "url" => "uuid.jpg"
        ]);

        Place::factory()->create([
            "street" => "street 1",
            "city" => "city 1",
            "code" => "1000",
            "country" => "BE",
            "bte"=> "A/21"
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
