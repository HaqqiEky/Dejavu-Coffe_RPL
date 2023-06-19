<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\OutletController;

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
    return view('home');
});

Route::get('/Login', [SessionController::class, 'index']);
Route::post('/Session/Login', [SessionController::class, 'store']);

Route::get('/Register', [RegisterController::class, 'index']);
Route::post('/Session/Register', [RegisterController::class, 'store']);

Route::get('/Dashboard', [HomeController::class, 'home']);

Route::get('/Kota', [KotaController::class, 'index']);

Route::get('/Outlet/{id_kota}', [OutletController::class, 'index'])->name('outlets');