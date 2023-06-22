<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DiskonController;

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

Route::get('/', [HomeController::class, 'index'])->name('landing');

Route::get('/Register', [RegisterController::class, 'index']);
Route::post('/Session/Register', [RegisterController::class, 'store']);

Route::get('/Login', [SessionController::class, 'index'])->name('Login');
Route::post('/Session/Login', [SessionController::class, 'store']);
Route::post('/Logout', [SessionController::class, 'destroy'])->name('Logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/Home', [HomeController::class, 'home'])->name('home');

    Route::get('/Kota', [KotaController::class, 'index']);
    Route::get('/Outlet/{id_kota}', [OutletController::class, 'index'])->name('outlets');

    Route::get('/Category', [CategoryController::class, 'index'])->name('category');
    Route::get('/Category/{id_category}', [MenuController::class, 'index'])->name('menu');
    Route::get('/Menu/{id}', [MenuController::class, 'variant'])->name('variant');

    Route::post('/Cart/Post', [CartController::class, 'store'])->name('cart.store');
    Route::get('/Cart', [CartController::class, 'index'])->name('cart.index');

    Route::get('/Diskon', [DiskonController::class, 'index'])->name('diskon.index');
    Route::get('/Cart/Diskon/{id_diskon}', [DiskonController::class, 'cart'])->name('diskon.cart');
    
});

