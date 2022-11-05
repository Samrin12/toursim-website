<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\CarController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.index');
})->name('home.index');

Route::get('/about', function () {
    return view('home.about');
})->name('home.about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::post('/room/{room}/attach', [RoomController::class,'attach'])->name('room.attach.store');
Route::get('/room/{room}/attach', [RoomController::class,'attachForm'])->name('room.attach');
Route::get('tour/list', [TourController::class, 'list'])->name('tour.list');
Route::resource('tour', TourController::class);
Route::get('/reserve/{id}/create', [ReserveController::class, 'create'])->name('reserve.create');
Route::post('/reserve/store', [ReserveController::class, 'store'])->name('reserve.store');
Route::get('hotel/list', [HotelController::class, 'list'])->name('hotel.list');
Route::resource('hotel', HotelController::class);
Route::get('/hotel/{hotel}/room/list', [RoomController::class, 'list'])->name('hotel.room.list');
Route::resource('hotel.room', RoomController::class);
Route::resource('car', CarController::class);

require __DIR__.'/auth.php';
