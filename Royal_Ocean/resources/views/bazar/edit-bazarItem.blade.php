@extends('layout')

@section('content')
<x-karta class="max-w-lg mx-auto mt-24 p-10">
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1">
        Upravit inzerát
    </h2>
    <p class="mb-4">Upravit <strong>{{$bazarItem->nazev}}</strong></p>
</header>

<form method="POST" action="/bazar/{{$bazarItem->id}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-6">
        <label
            for="cena"
            class="inline-block text-lg mb-2"
            >Cena</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="cena"
            value="{{$bazarItem->cena}}"
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
            value="{{$bazarItem->rok_vyroby}}"
        />

        @error('rok_vyroby')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror

    </div>

    <div class="mb-6">
        <label for="nazev" class="inline-block text-lg mb-2"
            >Název vybavení</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="nazev"
            placeholder="Příklad: Jachtařské rukavice"
            value="{{$bazarItem->nazev}}"
        />

        @error('nazev')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror

    </div>

    <div class="mb-6">
        <label
            for="znacka"
            class="inline-block text-lg mb-2"
            >Značka produktu</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="znacka"
            placeholder="Příklad: Gill"
            value="{{$bazarItem->znacka}}"
        />

        @error('znacka')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror

    </div>

    <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2"
            >Váš Email</label
        >
        <input
            type="email"
            class="border border-gray-200 rounded p-2 w-full"
            name="email"
            value="{{$bazarItem->email}}"
        />

        @error('email')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror

    </div>

    <div class="mb-6">
        <label
            for="cislo"
            class="inline-block text-lg mb-2"
        >
            Vaše telefonní číslo
        </label>
        <input
            type="tel"
            class="border border-gray-200 rounded p-2 w-full"
            name="cislo"
            value="{{$bazarItem->cislo}}"
        />

        @error('cislo')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror

    </div>

    <div class="mb-6">
        <label
            for="lokace"
            class="inline-block text-lg mb-2"
            >Místo vyzvednutí</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="lokace"
            placeholder="Příklad: České Budějovice"
            value="{{$bazarItem->lokace}}"
        />

        @error('lokace')
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
            name="uvodni_fotka"
        />
        <img class="w-48 mr-6 mb-6" src="{{$bazarItem->uvodni_fotka ? 
            asset('storage/' . $bazarItem->uvodni_fotka) : asset('/images/royal-ocean-low-resolution-logo-white-on-black-background.png')}}"/>
        @error('uvodni_fotka')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
    </div>

    {{--<div class="mb-6">
        <label for="fotky" class="inline-block text-lg mb-2">
            Fotky
        </label>
        <input
            type="file"
            class="border border-gray-200 rounded p-2 w-full"
            name="fotky"
        />
        <input
        type="file"
        class="border border-gray-200 rounded p-2 w-full"
        name="fotky"
        />
        <input
        type="file"
        class="border border-gray-200 rounded p-2 w-full"
        name="fotky"
        />
    </div>--}}

    <div class="mb-6"><label for="popisek"class="inline-block text-lg mb-2">Popis</label><textarea class="border border-gray-200 rounded p-2 w-full"name="popisek"rows="10"placeholder="Napište všechny relevantní informace">{{$bazarItem->popisek}}</textarea>
    @error('popisek')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
    </div>

    <div class="mb-6"><label for="uvod"class="inline-block text-lg mb-2">Úvodní věta</label><textarea class="border border-gray-200 rounded p-2 w-full"name="uvod"rows="2"placeholder="Popište produkt jednou nebo dvěma větami (bude se zobrazovat v přehledu produktů)">{{$bazarItem->uvod}}</textarea>
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

        <a href="/bazar" class="text-black ml-4 hover:text-royalblue"> Zpět do bazaru</a>
    </div>
</form>
</x-karta>
@endsection