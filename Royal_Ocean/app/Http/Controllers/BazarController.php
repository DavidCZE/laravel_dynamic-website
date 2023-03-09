<?php

namespace App\Http\Controllers;

use App\Models\Bazar;
use App\Models\BazarImage;
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
        $formFields = $request->validate([
            'nazev' => 'required',
            'znacka' => 'required',
            'rok_vyroby' => 'required',
            'uvod' => 'required',
            'popisek' => 'required',
            'email' => ['required', 'email'],
            'cislo' => 'required',
            'lokace' => 'required',
            
        ]);
/*
        $images = $request->file('images');
    
    foreach ($images as $image) {
        $path = $image->store('public/images');
        $filename = $image->getClientOriginalName();
        
        Bazar::create([
            'filename' => $filename,
            'path' => $path,
        ]);
        }
*/
        if($request->hasFile('uvodni_fotka')) {
            $formFields['uvodni_fotka'] = $request->file('uvodni_fotka')->store('uvodniFotkaBazar', 'public');
        }
/*
        if($request->hasFile('images')) {
        foreach ($request->file('images') as $imagefile) {
            $imagefile->store('images','public');
         }}
*/
        /*
        $bazarItem = new Bazar;
        $bazarItem->nazev = $request->nazev;
        $bazarItem->popisek = $request->popisek;
        $bazarItem->popisek = $request->popisek;
        $bazarItem->popisek = $request->popisek;
        $bazarItem->popisek = $request->popisek;
        $bazarItem->popisek = $request->popisek;
        $bazarItem->save();
        */
        /*
        foreach ($request->file('images') as $imagefile) {
            $image = new BazarImage;
            $path = $imagefile->store('/images/resource', ['disk' =>   'my_files']);
            $image->url = $path;
            $image->bazar_id = $bazar->id;
            $image->save();
        }
        */

        $formFields['user_id'] = auth()->id();

        Bazar::create($formFields);

        return redirect('/bazar')->with('message', 'Inzerát přidán');
    }

    //Edit form
    public function edit(Bazar $bazarItem) {
        return view('bazar.edit-bazarItem', ['bazarItem' => $bazarItem]);
    }

    //Update
    public function update(Request $request, Bazar $bazarItem) {
        //Make sure logged in user is owner
        if($bazarItem->user_id != auth()->id()) {
            abort(403, 'Neoprávněný příkaz');
        }

        $formFields = $request->validate([
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
            $formFields['uvodni_fotka'] = $request->file('uvodni_fotka')->store('uvodniFotkaBazar', 'public');
        }

        $bazarItem->update($formFields);

        return back()->with('message', 'Inzerát upraven');
    }

    //Vymazat bazarItem
    public function delete(Bazar $bazarItem) {
        //Make sure logged in user is owner
        if($bazarItem->user_id != auth()->id()) {
            abort(403, 'Neoprávněný příkaz');
        }
        
        $bazarItem->delete();
        return redirect('/bazar')->with('message', 'Inzerát byl smazán');
    }

    //Manage bazarItems
    public function manage() {
        return view('bazar.manage-bazarItem', ['bazar' => auth()->user()->bazar()->get()]);
    }
}
