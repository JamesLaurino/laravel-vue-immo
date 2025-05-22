<?php

namespace App\Http\Controllers\House;

use App\Http\Controllers\Controller;
use App\Models\House;
use Inertia\Inertia;

class HouseController extends Controller
{
    public function index() {

        $houses = House::all();
        return Inertia::render('house/Index', ['houses' => $houses]);
    }
}
