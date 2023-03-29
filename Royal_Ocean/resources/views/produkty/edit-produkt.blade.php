@extends('layout')

@section('content')
<x-karta class="max-w-lg mx-auto mt-24 p-10">
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1">
        Upravit inzerát
    </h2>
    <p class="mb-4">Upravit <strong>{{$produkt->nazev}}</strong></p>
</header>

<form method="POST" action="/produkty/{{$produkt->id}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-6">
        <label for="nazev" class="inline-block text-lg mb-2"
            >Název</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="nazev"
            value="{{$produkt->nazev}}"
        />

        @error('nazev')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror

    </div>

    <div class="mb-6">
        <label
            for="cena"
            class="inline-block text-lg mb-2"
            >Cena<span class="text-gray-500"> (v Kč)</span></label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="cena"
            placeholder="Příklad: 12 399"
            value="{{$produkt->cena}}"
        />

    <div class="mb-6">
        <label
            for="rok_vyroby"
            class="inline-block text-lg mb-2"
            >Rok výroby</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="rok_vyroby"
            value="{{$produkt->rok_vyroby}}"
        />

        @error('rok_vyroby')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror

    </div>

    <div class="mb-6">
        <label for="uvodni_fotka" class="inline-block text-lg mb-2">
            Úvodní fotka
        </label>
        <input
            type="file"
            class="border border-gray-200 rounded p-2 w-full"
            accept="image/*"
            name="uvodni_fotka"
        />
        <img class="w-48 mr-6 mb-6" src="{{$produkt->uvodni_fotka ? 
            asset('storage/' . $produkt->uvodni_fotka) : asset('/images/royal-ocean-low-resolution-logo-black-on-white-background.png')}}"/>
        @error('uvodni_fotka')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
    </div>

    <div class="mb-6">
        <label for="pimages" class="inline-block text-lg mb-2">
            Fotky
        </label>
        <input
            type="file"
            id="input-file-now-custom-3"
            class="border border-gray-200 rounded p-2 w-full"
            name="pimages[]"
            accept="image/*" multiple/>
        @unless(count($produkt->pimages) == 0)
            @foreach($produkt->pimages as $pimage)
                <img class="w-48 mr-6 mb-6" src="{{ asset('images/produkty/'.$pimage->pimage) }}">
            @endforeach
        @endunless
        @error('pimages')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6"><label for="popisek"class="inline-block text-lg mb-2">Popis</label><textarea class="border border-gray-200 rounded p-2 w-full"name="popisek"rows="10"placeholder="Napište všechny relevantní informace">{{$produkt->popisek}}</textarea>
    @error('popisek')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
    </div>

    <div class="mb-6"><label for="uvod"class="inline-block text-lg mb-2">Úvodní věta</label><textarea class="border border-gray-200 rounded p-2 w-full"name="uvod"rows="2"placeholder="Popište produkt jednou nebo dvěma větami (bude se zobrazovat v přehledu produktů)">{{$produkt->uvod}}</textarea>
    @error('uvod')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
    </div>

    <div class="mb-6">
        <button
            class="bg-royalblue text-white rounded py-2 px-4 hover:bg-black"
        >
            Upravit
        </button>

        <a href="/produkty/manage" class="text-black ml-4 hover:text-royalblue"> Zpět do přehledu</a>
    </div>
</form>
</x-karta>
@endsection