<?php

namespace App\Http\Controllers;

use App\Models\Bazar;
use App\Models\Image;
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
        $images = $bazarItem->images;
        return view('bazar.show-bazarItem', [
            'bazarItem' => $bazarItem
        ], compact('bazarItem', 'images'));
    }

    //Create form
    public function create() {
        return view('bazar.create-bazarItem');
    }

    //Uložit bazarItem data
    public function store(Request $request) {
        $formFields = $request->validate([
            'nazev' => 'required',
            'cena' => 'required',
            'znacka' => 'required',
            'rok_vyroby' => 'required',
            'uvod' => 'required',
            'popisek' => 'required',
            'email' => ['required', 'email'],
            'cislo' => 'required',
            'lokace' => 'required',
        ]);

        $formFields['user_id'] = auth()->id();

        if($request->hasFile('uvodni_fotka')) {
            $formFields['uvodni_fotka'] = $request->file('uvodni_fotka')->store('uvodniFotkaBazar', 'public');
        }

        $bazarItem = Bazar::create($formFields);
/*
        if($request->hasFile("images")){
            foreach ($request->file('images') as $image) {
                $path = $image->store('images', 'public');
        
                $bazarItem->images()->create([
                    'path' => $path,
                ]);
            }
        }
*/
        
        if($request->hasFile("images")){
            $files=$request->file("images");
            foreach($files as $file){
                $imageName=time().'_'.$file->getClientOriginalName();
                $file->move(\public_path("/images"),$imageName);
                Image::create([
                    'bazar_id' => $bazarItem->id,
                    'image' => $imageName
                ]);
            }
        }

/*
        if($request->hasFile('fotka1')) {
            $formFields['fotka1'] = $request->file('fotka1')->store('Fotka1Bazar', 'public');
        }
        if($request->hasFile('fotka2')) {
            $formFields['fotka2'] = $request->file('fotka2')->store('Fotka2Bazar', 'public');
        }
        if($request->hasFile('fotka3')) {
            $formFields['fotka3'] = $request->file('fotka3')->store('Fotka3Bazar', 'public');
        }
        if($request->hasFile('fotka4')) {
            $formFields['fotka4'] = $request->file('fotka4')->store('Fotka4Bazar', 'public');
        }
        if($request->hasFile('fotka5')) {
            $formFields['fotka5'] = $request->file('fotka5')->store('Fotka5Bazar', 'public');
        }
        if($request->hasFile('fotka6')) {
            $formFields['fotka6'] = $request->file('fotka6')->store('Fotka6Bazar', 'public');
        }
        if($request->hasFile('fotka7')) {
            $formFields['fotka7'] = $request->file('fotka7')->store('Fotka7Bazar', 'public');
        }
        if($request->hasFile('fotka8')) {
            $formFields['fotka8'] = $request->file('fotka8')->store('Fotka8Bazar', 'public');
        }
        if($request->hasFile('fotka9')) {
            $formFields['fotka9'] = $request->file('fotka9')->store('Fotka9Bazar', 'public');
        }
        if($request->hasFile('fotka10')) {
            $formFields['fotka10'] = $request->file('fotka10')->store('Fotka10Bazar', 'public');
        }
*/
        /*if($request->has('fotky')) {
            
        }*/

        /*if($request->has('fotky')) {
            $bazar = Bazar::with('fotky')->create($formFields);
            $fotky = $bazar->fotky;
            foreach($request->file('fotky')as $fotka) {
                $fotkaName = $formFields['nazev'].'-fotka-'.time().rand(1,1000).'.'.$fotka->extension();
                $fotka->move(public_path('bazar_fotky'),$fotkaName);
                BazarImage::create([
                    'bazar_id' => $bazar->id,
                    'fotka' => $fotkaName]);
            }
        }*/

        return redirect('/bazar')->with('message', 'Inzerát přidán');
    }
/*
    //Zobrazit fotky
    public function fotky($id) {
        $bazarItem = Bazar::find($id);
        if(!$bazarItem) abort(404);
        $fotky = $bazarItem->fotky;
        return view('bazar.fotky-bazarItem', compact('bazarItem', 'fotky'));
    }
*/

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
            'cena' => 'required',
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

        if($request->hasFile('fotka1')) {
            $formFields['fotka1'] = $request->file('fotka1')->store('Fotka1Bazar', 'public');
        }
        if($request->hasFile('fotka2')) {
            $formFields['fotka2'] = $request->file('fotka2')->store('Fotka2Bazar', 'public');
        }
        if($request->hasFile('fotka3')) {
            $formFields['fotka3'] = $request->file('fotka3')->store('Fotka3Bazar', 'public');
        }
        if($request->hasFile('fotka4')) {
            $formFields['fotka4'] = $request->file('fotka4')->store('Fotka4Bazar', 'public');
        }
        if($request->hasFile('fotka5')) {
            $formFields['fotka5'] = $request->file('fotka5')->store('Fotka5Bazar', 'public');
        }
        if($request->hasFile('fotka6')) {
            $formFields['fotka6'] = $request->file('fotka6')->store('Fotka6Bazar', 'public');
        }
        if($request->hasFile('fotka7')) {
            $formFields['fotka7'] = $request->file('fotka7')->store('Fotka7Bazar', 'public');
        }
        if($request->hasFile('fotka8')) {
            $formFields['fotka8'] = $request->file('fotka8')->store('Fotka8Bazar', 'public');
        }
        if($request->hasFile('fotka9')) {
            $formFields['fotka9'] = $request->file('fotka9')->store('Fotka9Bazar', 'public');
        }
        if($request->hasFile('fotka10')) {
            $formFields['fotka10'] = $request->file('fotka10')->store('Fotka10Bazar', 'public');
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
