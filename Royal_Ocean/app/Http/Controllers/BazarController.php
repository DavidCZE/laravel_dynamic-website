<?php

namespace App\Http\Controllers;

use App\Models\Bazar;
use Illuminate\Http\Request;

class BazarController extends Controller
{
    // Všechny inzeráty
    public function index() {
        return view('bazar.index-bazar', [
            'bazar' => Bazar::latest()->filter(request(['search']))->paginate(4)
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
            'rok_vyroby' => 'required',
            'uvod' => 'required',
            'popisek' => 'required',
            'email' => ['required', 'email'],
            'cislo' => 'required',
            'lokace' => 'required'
        ]);

        if($request->hasFile('uvodni_fotka')) {
            $formFieldsBazar['uvodni_fotka'] = $request->file('uvodni_fotka')->store('uvodniFotkaBazar', 'public');
        }

        Bazar::create($formFieldsBazar);

        return redirect('/bazar')->with('message', 'Inzerát přidán');
    }

    //Edit form
    public function edit(Bazar $bazarItem) {
        return view('bazar.edit-bazarItem', ['bazarItem' => $bazarItem]);
    }

    //Update
    public function update(Request $request, Bazar $bazarItem) {
        $formFieldsBazar = $request->validate([
            'nazev' => 'required',
            'znacka' => 'required',
            'rok_vyroby' => 'required',
            'uvod' => 'required',
            'popisek' => 'required',
            'email' => ['required', 'email'],
            'cislo' => 'required',
            'lokace' => 'required'
        ]);

        if($request->hasFile('uvodni_fotka')) {
            $formFieldsBazar['uvodni_fotka'] = $request->file('uvodni_fotka')->store('uvodniFotkaBazar', 'public');
        }

        $bazarItem->update($formFieldsBazar);

        return back()->with('message', 'Inzerát upraven');
    }

    //Vymazat bazarItem
    public function delete(Bazar $bazarItem) {
        $bazarItem->delete();
        return redirect('/bazar')->with('message', 'Inzerát byl smazán');
    }
}
