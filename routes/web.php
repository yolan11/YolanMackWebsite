<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\SitemapController;
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
    Route::get('/event/create', [EventController::class, 'create']);



    //Crud nouvelle reservation
    Route::get('/event', [EventController::class, 'index']);
    Route::post('/event/store', [EventController::class, 'store']);

    //Sitemap
    Route::get('/sitemap.xml', [SitemapController::class, 'index']);


});


Route::middleware('auth')->group(function () {
    //Dashboard routes
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('Dashboard');
    Route::get('/dashboard/user', [DashboardController::class, 'showAdminUser'])->name('DashboardUser');
    Route::get('/dashboard/event', [DashboardController::class, 'showAdminEvent'])->name('DashboardEvent');
    Route::get('/dashboard/image', [DashboardController::class, 'showAdminImage'])->name('DashboardImage');
    Route::get('/dashboard/image/error', [DashboardController::class, 'showAdminImageError'])->name('DashboardImageError');
    Route::get('/dashboard/event/error', [DashboardController::class, 'showAdminEventError'])->name('DashboardEventError');
    Route::post('/dashboard/event/store', [EventController::class, 'storeAdmin']);


    //Image routes
    Route::post('/image/store', [ImageController::class, 'store'])->name('uploadImage');
    Route::delete('/image/destroy/{id}', [ImageController::class, 'destroy'])->name('deleteImage');


    //User routes
    Route::delete('/user/destroy/{id}', [LoginController::class, 'destroy'])->name('userDestroy');
    Route::put('/user/update/{id}', [LoginController::class, 'update'])->name('userUpdate');

    //Event Routes
    Route::delete('/event/destroy/{id}', [EventController::class, 'destroy'])->name('deleteEvent');
    Route::get('/getEventData/{id}', [EventController::class, 'getEventData']);
    Route::put('/event/update/{id}', [EventController::class, 'update'])->name('updateEvent');

});

require __DIR__.'/auth.php';
