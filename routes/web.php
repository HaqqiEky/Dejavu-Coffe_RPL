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
use App\Http\Controllers\OrderListController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AdministratorController;

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
Route::middleware(['auth'])->group(function () {
    Route::get('/Home', [HomeController::class, 'home'])->name('home');
});

Route::get('/', [HomeController::class, 'index'])->name('landing');

Route::get('/Register', [RegisterController::class, 'index']);
Route::post('/Session/Register', [RegisterController::class, 'store']);

Route::get('/Login', [SessionController::class, 'index'])->name('Login');
Route::post('/Session/Login', [SessionController::class, 'store']);
Route::post('/Logout', [SessionController::class, 'destroy'])->name('Logout');


Route::middleware('auth', 'pembeli')->group(function () {

    Route::get('/Kota', [KotaController::class, 'index']);
    Route::get('/Outlet/{id_kota}', [OutletController::class, 'index'])->name('outlets');

    Route::get('/Category', [CategoryController::class, 'index'])->name('category');
    Route::get('/Category/{id_category}', [MenuController::class, 'index'])->name('menu');
    Route::get('/Menu/{id}', [MenuController::class, 'variant'])->name('variant');

    Route::post('/Cart/Post', [CartController::class, 'store'])->name('cart.store');
    Route::get('/Cart', [CartController::class, 'index'])->name('cart.index');

    Route::get('/Diskon', [DiskonController::class, 'index'])->name('diskon.index');
    Route::get('/Cart/Diskon/{id_diskon}', [DiskonController::class, 'cart'])->name('diskon.cart');

    Route::post('/Order/Store', [OrderListController::class, 'store'])->name('order.store');

    Route::get('/Payment', [PaymentController::class, 'index'])->name('orderlist.index');
    Route::get('/Payment/Bank/Mandiri', [PaymentController::class, 'banktransfer_a']);
    Route::get('/Payment/Berhasil', [PaymentController::class, 'banktransfer_b']);
    Route::get('/Payment/Bank', [PaymentController::class, 'banktransfer']);
    Route::get('/Payment/Gopay', [PaymentController::class, 'gopay']);
});

Route::middleware('auth', 'administrator')->group(function () {
    Route::get('/OrderList', [AdministratorController::class, 'index'])->name('orderlist.index');
    Route::get('/StatistikDay', [AdministratorController::class, 'statistik_day'])->name('statistik_day');
    Route::get('/StatistikWeek', [AdministratorController::class, 'statistik_week'])->name('statistik_week');
    Route::get('/StatistikMonth', [AdministratorController::class, 'statistik_month'])->name('statistik_month');
    Route::get('/IncomeDay', [AdministratorController::class, 'income_day'])->name('income_day');
    Route::get('/IncomeWeek', [AdministratorController::class, 'income_week'])->name('income_week');
    Route::get('/IncomeMonth', [AdministratorController::class, 'income_month'])->name('income_month');
    Route::get('/Beverage', [AdministratorController::class, 'beverage'])->name('beverage');
    Route::get('/Archive', [AdministratorController::class, 'archive'])->name('archive');
});

