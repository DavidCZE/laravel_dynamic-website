<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BazarController;
use App\Http\Controllers\ProduktyController;


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
Route::get('/bazar/create', [BazarController::class, 'create'])->middleware('auth');

//Uložení BazarItem dat
Route::post('/bazar', [BazarController::class, 'store'])->middleware('auth');

//Úprava bazarItem form
Route::get('/bazar/{bazarItem}/edit', [BazarController::class, 'edit'])->middleware('auth');

//Upravit bazarIten
Route::put('/bazar/{bazarItem}', [BazarController::class, 'update'])->middleware('auth');

//Vymazat bazarItem
Route::delete('/bazar/{bazarItem}', [BazarController::class, 'delete'])->middleware('auth');

//Manage Bazar
Route::get('/bazar/manage', [BazarController::class, 'manage'])->middleware('auth');

//Bazar - 1 produkt - bazarItem - has to be under other bazar routes
Route::get('/bazar/{bazarItem}', [BazarController::class, 'show']);

//Register form
Route::get('/register', [UserController::class, 'register'])->middleware('guest');

//Create New User
Route::post('/users', [UserController::class, 'store']);

//Log out
Route::post('logout', [UserController::class, 'logout'])->middleware('auth');

//Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Login User
Route::post('/users/authenticate', UserController::class, 'authenticate');
