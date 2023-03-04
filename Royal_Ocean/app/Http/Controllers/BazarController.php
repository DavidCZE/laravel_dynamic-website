<?php

namespace App\Http\Controllers;

use App\Models\Bazar;
use Illuminate\Http\Request;

class BazarController extends Controller
{
    // Všechny inzeráty
    public function index() {
        return view('bazar.index-bazar', [
            'bazar' => Bazar::latest()->filter(request(['search']))->get()
        ]);
    }

    //Jednotlivé bazarItem
    public function show(Bazar $bazarItem) {
        return view('bazar.show-bazarItem', [
            'bazarItem' => $bazarItem
        ]);
    }

    //Create form
    public function create() {
        return view('bazar.create-bazarItem');
    }

    //Uložit bazarItem data
    public function store(Request $request) {
        $formFieldsBazar = $request->validate([
            'nazev' => 'required',
            'znacka' => 'required',
            'rokVyroby' => 'required',
            'uvod' => 'required',
            'popisek' => 'required',
            'email' => ['required', 'email'],
            'cislo' => 'required'
        ]);

        Bazar::create($formFieldsBazar);

        return redirect('/bazar')->with('message', 'Inzerát přidán');
    }
}
