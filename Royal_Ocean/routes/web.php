<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BazarController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
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
//Domovská stránka
Route::get('/', [HomeController::class, 'index']);


//Všechny články
Route::get('/blog', [BlogController::class, 'index']);

//Formulář - přidat článek
Route::get('/blog/create', [BlogController::class, 'create'])->middleware('role:admin');

//Uložení článek dat
Route::post('/blog', [BlogController::class, 'store'])->middleware('role:admin');

//Úprava článku formulář
Route::get('/blog/{blogItem}/edit', [BlogController::class, 'edit'])->middleware('role:admin');

//Upravit článek
Route::put('/blog/{blogItem}', [BlogController::class, 'update'])->middleware('role:admin');

//Vymazat článek
Route::delete('/blog/{blogItem}', [BlogController::class, 'delete'])->middleware('role:admin');

//Upravit články - přehled
Route::get('/blog/manage', [BlogController::class, 'manage'])->middleware('role:admin');

//Jednotlivé články
Route::get('/blog/{blogItem}', [BlogController::class, 'show']);



//Všechny produkty
Route::get('/produkty', [ProduktyController::class, 'index']);

//Form - Create Product
Route::get('/produkty/create', [ProduktyController::class, 'create'])->middleware('role:admin');

//Uložení Produkt dat
Route::post('/produkty', [ProduktyController::class, 'store'])->middleware('role:admin');

//Úprava produkt form
Route::get('/produkty/{produkt}/edit', [ProduktyController::class, 'edit'])->middleware('role:admin');

//Upravit produkt
Route::put('/produkty/{produkt}', [ProduktyController::class, 'update'])->middleware('role:admin');

//Vymazat bazarItem
Route::delete('/produkty/{produkt}', [ProduktyController::class, 'delete'])->middleware('role:admin');

//Manage Produkty
Route::get('/produkty/manage', [ProduktyController::class, 'manage'])->middleware('role:admin');

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

//Bazar - fotky
Route::get('/bazar-fotky/{bazarItem}', [BazarController::class, 'fotky'])->name('bazarItem.fotky');



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
