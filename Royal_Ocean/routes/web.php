<?php

use Illuminate\Support\Facades\Route;
use App\Models\Produkty;
use App\Models\Bazar;

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
    return view('produkty', [
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

//Bazar
Route::get('/bazar', function (){
    return view('bazar', [
        'heading' => 'Náš bazar',
        'bazar' => Bazar::all()
    ]);
});

//Bazar - 1 produkt - bazarItem
Route::get('/bazar/{id}', function($id) {
    return view('bazarItem', [
        'bazarItem' => Bazar::find($id)
    ]);
});