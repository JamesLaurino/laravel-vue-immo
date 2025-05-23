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
Route::get('/house/create', [HouseController::class, 'create'])
    ->middleware('auth')
    ->name('house.create');

Route::get('/house/edit/{id}', [HouseController::class, 'edit'])
    ->middleware('auth')
    ->name('house.edit');

Route::post('/house/update', [HouseController::class, 'update'])
    ->middleware('auth')
    ->name('house.update');

Route::post('/house', [HouseController::class, 'store'])->name('house.store');
Route::get('/house/{id}', [HouseController::class, 'show'])->name('house.show');
Route::delete('/house/{id}', [HouseController::class, 'destroy'])
    ->middleware('auth')
    ->name('house.destroy');


Route::delete('/image/{id}', [\App\Http\Controllers\Image\ImageController::class, 'destroy'])
    ->middleware('auth')
    ->name('image.destroy');
