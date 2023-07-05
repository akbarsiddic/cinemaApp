<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\BookingsController;
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

// get all movies to display on the home page
Route::resource('/movies', MoviesController::class);

// booking routes
// Route::get('/bookings/create', [App\Http\Controllers\BookingsController::class, 'create'])->name('bookings.create');
// Route::post('/bookings/create', [App\Http\Controllers\BookingsController::class, 'store'])->name('bookings.store');
// Route::get('/bookings/create', [App\Http\Controllers\BookingsController::class, 'index']);
// Route::resource('/bookings', BookingsController::class)->name('index', 'bookings.index', 'store', 'bookings.store');
Route::get('/bookings/create/{id}', [BookingsController::class, 'create'])->name('bookings.create');
Route::post('/bookings/create', [BookingsController::class, 'store'])->name('bookings.store');


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
