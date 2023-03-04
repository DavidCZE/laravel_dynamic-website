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

//Form - Přidat produkt do bazaru
Route::get('/bazar/create', [BazarController::class, 'create']);

//Uložení BazarItem dat
Route::post('/bazar', [BazarController::class, 'store']);


//Bazar - 1 produkt - bazarItem
Route::get('/bazar/{bazarItem}', [BazarController::class, 'show']);