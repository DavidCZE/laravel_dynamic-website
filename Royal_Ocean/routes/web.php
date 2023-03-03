<?php

use App\Http\Controllers\BazarController;
use App\Http\Controllers\ProduktyController;
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

//Všechny produkty
Route::get('/', [ProduktyController::class, 'index']);

// Jednotlivé produkty
Route::get('/produkty/{produkt}', [ProduktyController::class, 'show']);

//Bazar
Route::get('/bazar', [BazarController::class, 'index']);

//Bazar - 1 produkt - bazarItem
Route::get('/bazar/{bazarItem}', [BazarController::class, 'show']);