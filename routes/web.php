<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DashboardGalleryController;
use App\Http\Controllers\Admin\DashboardReservationController;
use App\Http\Controllers\Admin\DashboardUserController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('guest')->group(function () {
    //Routes page
Route::get('/', function () {return view('welcome');})->name('Accueil');
Route::get('/Reservation', function(){return view('reservation');})->name('Reservation');
Route::get('/Gallery', function(){return view('gallery');})->name('Gallery');

//Crud nouvelle reservation
Route::get('/events', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::post('/events/store', [EventController::class, 'store']);
});


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/reservations', [DashboardReservationController::class, 'index'])->name('dashboardReservations');
    Route::get('/dashboard/utilisateurs', [DashboardUserController::class, 'index'])->name('dashboardUtilisateurs');
    Route::get('/dashboard/gallerie', [DashboardGalleryController::class, 'index'])->name('dashboardGallerie');

});

require __DIR__.'/auth.php';
