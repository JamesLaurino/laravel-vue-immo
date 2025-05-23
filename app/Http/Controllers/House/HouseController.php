<?php

namespace App\Http\Controllers\House;

use App\Http\Controllers\Controller;
use App\Models\House;
use App\Models\Image;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;

class HouseController extends Controller
{
    public function index() {

        $houses = House::all();
        $houses->load('images');

        return Inertia::render('house/Index', ['houses' => $houses]);
    }

    public function create() {
        return Inertia::render('house/Create');
    }

    public function store(Request $request) {

        $validated = $request->validate([
            'title' => "required|string|min:1",
            'price' => "required|numeric|gt:0",
            'rooms' => "required|numeric|gt:0",
            'surface' => "required|numeric|gt:0",
            'description' => "required|string|min:1",
            'city' => "required|string|min:1",
            'country' => "required|string|min:1",
            'street' => "required|string|min:1",
            'code' => "required|string|min:1",
            'bte' => "required|string|min:1",
        ]);


        $request->validate([
            'files' => 'required|array',
            'files.*' => 'array',
            'files.*.*' => 'file|max:2048',
        ]);

        $house = House::create([
            'title' => $validated['title'],
            'price' => $validated['price'],
            'rooms' => $validated['rooms'],
            'surface' => $validated['surface'],
            'description' => $validated['description']
        ]);


        Place::create([
            'bte' => $validated['bte'],
            'city' => $validated['city'],
            'country' => $validated['country'],
            'street' => $validated['street'],
            'code' => $validated['code'],
            'house_id' => $house->id
        ]);

        foreach ($request->file('files') as $files) {
            foreach($files as $file) {
                $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('upload', $filename, 'public');
                Image::create([
                    'house_id' => $house->id,
                    'url' => $filename,
                ]);
            }
        }

        return redirect()->route('house.index');
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
