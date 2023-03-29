<?php

namespace App\Http\Controllers;

use App\Models\Pimage;
use App\Models\Produkty;
use Illuminate\Http\Request;

class ProduktyController extends Controller
{
    public function index() {
        return view('produkty.index-produkty', [
            'produkty' => Produkty::latest()->paginate(6)
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
        $formFieldsProd = $request->validate([
            'nazev' => 'required',
            'cena' => 'required',
            'rok_vyroby' => 'required',
            'uvod' => 'required',
            'popisek' => 'required',
            
        ]);

        if($request->hasFile('uvodni_fotka')) {
            $formFieldsProd['uvodni_fotka'] = $request->file('uvodni_fotka')->store('uvodniFotkaProdukty', 'public');
        }

        $produkt = Produkty::create($formFieldsProd);

        if($request->hasFile("pimages")){
            $files=$request->file("pimages");
            foreach($files as $file){
                $imageName=time().'-'.$file->getClientOriginalName();
                $file->move(\public_path("/images/produkty"),$imageName);
                Pimage::create([
                    'produkty_id' => $produkt->id,
                    'pimage' => $imageName
                ]);
            }
        }

        return redirect('/produkty')->with('message', 'Produkt přidán');
    }

    //Edit form
    public function edit(Produkty $produkt) {
        return view('produkty.edit-produkt', ['produkt' => $produkt]);
    }

    //Update
    public function update(Request $request, Produkty $produkt) {
        $formFieldsProd = $request->validate([
            'nazev' => 'required',
            'cena' => 'required',
            'rok_vyroby' => 'required',
            'uvod' => 'required',
            'popisek' => 'required',
        ]);

        if($request->hasFile('uvodni_fotka')) {
            $formFieldsProd['uvodni_fotka'] = $request->file('uvodni_fotka')->store('uvodniFotkaProdukty', 'public');
        }

        if($request->hasFile("pimages")){
            $files=$request->file("pimages");
            foreach($files as $file){
                $imageName=time().'-'.$file->getClientOriginalName();
                $file->move(\public_path("/images/produkty"),$imageName);
                Pimage::create([
                    'produkty_id' => $produkt->id,
                    'pimage' => $imageName
                ]);
            }
        }

        $produkt->update($formFieldsProd);

        return back()->with('message', 'Produkt upraven');

    }

    //Vymazat produkt
    public function delete(Produkty $produkt) {
        
        $produkt->delete();
        return redirect('/produkty/manage')->with('message', 'Produkt byl smazán');
    }

    //Manage produkty
    public function manage() {
        return view('produkty.manage-produkty', ['produkty' => Produkty::all()]);
    }
}
