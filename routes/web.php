<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DashboardGalleryController;
use App\Http\Controllers\Admin\DashboardReservationController;
use App\Http\Controllers\Admin\DashboardUserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ImageController;
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
Route::get('/Gallery', [ImageController::class, 'index'])->name('Gallery');

//Crud nouvelle reservation
Route::get('/events', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::post('/events/store', [EventController::class, 'store']);
});


Route::middleware('auth')->group(function () {
    //Dashboard routes
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('Dashboard');
    Route::get('/dashboard/user', [DashboardController::class, 'showAdminUser'])->name('DashboardUser');
    Route::get('/dashboard/event', [DashboardController::class, 'showAdminEvent'])->name('DashboardEvent');
    Route::get('/dashboard/image', [DashboardController::class, 'showAdminImage'])->name('DashboardImage');
    Route::get('/dashboard/image/error', [DashboardController::class, 'showAdminImageError'])->name('DashboardImageError');


    //Image routes
    Route::post('/images/upload', [ImageController::class, 'upload'])->name('uploadImage');
    Route::delete('/images/destroy/{id}', [ImageController::class, 'destroy'])->name('deleteImage');


    //User routes
    Route::delete('/user/destroy/{id}', [LoginController::class, 'destroy'])->name('User.destroy');
    Route::put('/user/update/{id}', [LoginController::class, 'update'])->name('User.update');

});

require __DIR__.'/auth.php';
