<?php

use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ReviewController;
use App\Models\Reservation;
use App\Models\Restaurant;

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

Auth::routes(['verify' => true]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('restaurants', [RestaurantController::class, 'index'])->name('restaurants.index');

Route::resource('reviews', ReviewController::class);

Route::get('restaurants/{restaurant}', [RestaurantController::class, 'detail'])->name('restaurants.detail');

Route::get('reservations', [ReservationController::class, 'index'])->name('reservations.index');

Route::get('/reservations/subscription', [ReservationController::class, 'create'])->name('subscription');
