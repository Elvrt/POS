<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
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
//Route home
Route::get('/home', [HomeController::class,'home']); 

//Route products
Route::prefix('products')->group(function () {
    Route::get('/category/food-beverage', [ProductsController::class, 'foodBeverage']);
    Route::get('/category/beauty-health', [ProductsController::class,'beautyHealth']);
    Route::get('/category/home-care', [ProductsController::class,'homeCare']);
    Route::get('/category/baby-kid', [ProductsController::class,'babyKid']);

    });
//Route user
    Route::get('/user/{id}/name/{name}', [UserController::class,'user']);

//Route penjualan
    Route::get('/transaksi', [PenjualanController::class,'transaksi']);