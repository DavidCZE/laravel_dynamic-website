<?php

namespace App\Http\Controllers;

use App\Models\Produkty;
use Illuminate\Http\Request;

class ProduktyController extends Controller
{
    public function index() {
        return view('produkty.index-produkty', [
            'produkty' => Produkty::latest()->paginate(4)
        ]);
    }

    public function show(Produkty $produkt) {
        return view('produkty.show-produkt', [
            'produkt' => $produkt
        ]);
    }
}
