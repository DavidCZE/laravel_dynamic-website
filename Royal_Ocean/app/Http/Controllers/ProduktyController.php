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

    //Create form
    public function create() {
        return view('produkty.create-produkt');
    }

    //Uložit produkt data
    public function store(Request $request) {
        $formFields = $request->validate([
            'nazev' => 'required',
            'cena' => 'required',
            'rok_vyroby' => 'required',
            'uvod' => 'required',
            'popisek' => 'required',
            
        ]);

        if($request->hasFile('uvodni_fotka')) {
            $formFields['uvodni_fotka'] = $request->file('uvodni_fotka')->store('uvodniFotkaProdukty', 'public');
        }

        Produkty::create($formFields);

        return redirect('/produkty')->with('message', 'Produkt přidán');
    }

    //Manage produkty
    public function manage() {
        return view('produkty.manage-produkty', ['produkty' => Produkty::all()]);
    }
}
