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
    public function pcreate() {
        return view('produkty.create-produkt');
    }

    //Uložit produkt data
    public function pstore(Request $request) {
        $formFieldsProdukty = $request->validate([
            'pnazev' => 'required',
            'pcena' => 'required',
            'prok_vyroby' => 'required',
            'puvod' => 'required',
            'ppopisek' => 'required',
            
        ]);

        if($request->hasFile('puvodni_fotka')) {
            $formFieldsProdukty['puvodni_fotka'] = $request->file('puvodni_fotka')->store('uvodniFotkaProdukty', 'public');
        }

        Produkty::create($formFieldsProdukty);

        return redirect('/produkty')->with('message', 'Produkt přidán');
    }
}
