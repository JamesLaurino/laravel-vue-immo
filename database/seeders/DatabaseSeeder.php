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

        House::factory()->create([
            'title' => 'House 2',
            'description' => 'House 2 description',
            'price' => 200000.0,
            'rooms'=> 5,
            'surface' => 150

        ]);

        House::factory()->create([
            'title' => 'House 3',
            'description' => 'House 3 description',
            'price' => 100000.0,
            'rooms'=> 9,
            'surface' => 25

        ]);

        Image::factory()->create([
           "url" => "uuid.jpg"
        ]);

        Image::factory()->create([
            "url" => "uuid2.jpg"
        ]);

        Image::factory()->create([
            "url" => "uuid3.jpg"
        ]);

        Place::factory()->create([
            "street" => "street 1",
            "city" => "city 1",
            "code" => "1000",
            "country" => "BE",
            "bte"=> "A/21"
        ]);


        Place::factory()->create([
            "street" => "street 2",
            "city" => "city 2",
            "code" => "1001",
            "country" => "BE",
            "bte"=> "A/22"
        ]);

        Place::factory()->create([
            "street" => "street 3",
            "city" => "city 3",
            "code" => "1002",
            "country" => "BE",
            "bte"=> "A/23"
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
