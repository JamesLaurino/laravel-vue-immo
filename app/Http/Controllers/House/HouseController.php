<?php

namespace App\Http\Controllers\House;

use App\Http\Controllers\Controller;
use App\Models\House;
use App\Models\Place;
use Inertia\Inertia;

class HouseController extends Controller
{
    public function index() {

        $houses = House::all();
        $houses->load('images');

        return Inertia::render('house/Index', ['houses' => $houses]);
    }

    public function show($id) {

        $house = House::FindOrFail($id);
        $house->load('images');
        $address = Place::latest()->where('house_id', $id)->first();

        return Inertia::render('house/Show', [
            'house' => $house,
            'address' => $address
        ]);
    }
}
