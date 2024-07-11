<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\AccountController;

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


Route::get('/', [HomeController::class, 'showHome'])->name('home');

Route::middleware(['auth'])->group(function () {
    /*MAP*/
    Route::get('/{map}/{zoom}/{x}/{y}', [TileController::class, 'getTile']);
    Route::get('/map/create', [MapController::class, 'showCreateMap'])->name('show.create_map');
    Route::get('/maps', [MapController::class, 'showMyMaps'])->name('show.my_maps');
    Route::get('/map/{map}', [MapController::class, 'showMap'])->name('show.map');
    Route::post('/map/create', [MapController::class, 'createMap'])->name('submit.create_map');
    Route::delete('/map/{map}', [MapController::class, 'deleteMap'])->name('submit.delete_map');

    /*STRIPE*/
    Route::post('/stripe', [StripeController::class, 'stripe'])->name('stripe');
    Route::get('/success', [StripeController::class, 'success'])->name('success');
    Route::get('/cancel', [StripeController::class, 'cancel'])->name('cancel');

    /*ACCOUNT*/
    Route::get('/account', [AccountController::class, 'showAccount'])->name('show.account');

});



/*AUTH*/
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'processLogin'])->name('login.submit');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'processRegister'])->name('register.submit');
Route::delete('/logout', [AuthController::class, 'processLogout'])->name('logout');

Route::get('/reset-password/{encryptedEmail}', [AuthController::class, 'showResetPassword'])->name('auth.reset-password');
Route::post('/reset-password', [AuthController::class, 'processResetPassword'])->name('reset-password.submit');


