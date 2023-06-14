<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ReservationController;
use App\Models\Tour;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Admin\TourRelationsController;
use App\Http\Controllers\FrontendController;
use Faker\Container\ContainerBuilder;

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

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/all-tours', [FrontendController::class, 'allTours'])->name('allTours');
Route::get('/albania-tours', [FrontendController::class, 'albanianTours'])->name('albanianTours');
Route::get('/other-countries', [FrontendController::class, 'otherTours'])->name('otherTours');
Route::get('/tour/{tour}', [FrontendController::class, 'showTour'])->name('singleTour');
Route::post('/reservations', [FrontendController::class, 'storeReservation'])->name('reservation.store');

Route::get('/contact-us', [FrontendController::class, 'contactUs'])->name('contactUs');
Route::post('/contact-us', [FrontendController::class, 'storeContact'])->name('contact.store');
Route::get('/about-us', function () {
    return view('front.about');
})->name('aboutUs');


Route::get('/rezultate', [FrontendController::class, 'search'])->name('search');







Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('', function () {
        return view('admin.dashboardHome');
    })->name('admin');
    Route::resource('tours', TourController::class);
    Route::put('/tours/update-date/{tourDate}', [TourRelationsController::class, 'updateTourDate'])->name('tour.update.date');
    Route::put('/tours/update-include/{tourInclude}', [TourRelationsController::class, 'updateTourInlclude'])->name('tour.update.include');
    Route::put('/tours/update-itinerary/{tourItinerary}', [TourRelationsController::class, 'updateTourItinerary'])->name('tour.update.itinerary');
    Route::get('/reservations', [ReservationController::class, 'index'])->name('reservation.index');
    Route::delete('/reservations/{reservation}', [ReservationController::class, 'destroy'])->name('reservation.destroy');
    Route::get('/contacts', [ContactController::class, 'index'])->name('contact.index');
    Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contact.destroy');
});

Auth::routes(['register' => false]);
