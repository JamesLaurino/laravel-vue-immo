<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\House\HouseController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});


Route::get('/house', [HouseController::class, 'index'])->name('house.index');
Route::get('/house/create', [HouseController::class, 'create'])->name('house.create');
Route::post('/house', [HouseController::class, 'store'])->name('house.store');
Route::get('/house/{id}', [HouseController::class, 'show'])->name('house.show');

