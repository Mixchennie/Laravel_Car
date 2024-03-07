<?php

use Illuminate\Support\Facades\Route;
use App\Models\Car;
use App\Http\Controllers\CarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/allCar', [CarController::class, 'index']);
Route::get('/Cars/{id}', [CarController::class, 'show']);


Route::resource('cars', CarController::class);
Route::get('/cars/create', [CarController::class, 'create']);
// Route::get('/car/{id}', [Carcontroller::class, 'show'])->name('car.detail');

// Route::resource('cars' . CarController::class);
// Route::get('cars', [CarController::class, 'show'])->name('cars.show');

// Route::get('cars', [CarController::class, 'index'])->name('cars.index');