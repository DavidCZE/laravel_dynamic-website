<?php

use Illuminate\Support\Facades\Route;
use App\Models\Produkty;

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
Route::get('/', function () {
    return view('uvod', [
        'heading' => 'Náš E-Shop',
        'produkty' => Produkty::all()
    ]);
});

// Jednotlivé produkty
Route::get('/produkty/{id}', function($id) {
    return view('produkt', [
        'produkt' => Produkty::find($id)
    ]);
});