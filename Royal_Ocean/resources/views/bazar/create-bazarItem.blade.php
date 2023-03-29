@extends('layout')

@section('content')
<x-karta class="max-w-lg mx-auto mt-24 p-10">
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1">
        Vytvořit inzerát
    </h2>
    <p class="mb-4">Nabídněte vaše jachtařské vybavení k prodeji</p>
</header>

<form role="form" method="POST" action="/bazar" enctype="multipart/form-data">
    @csrf

    <div class="mb-6">
        <label for="nazev" class="inline-block text-lg mb-2"
            >Název vybavení</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="nazev"
            placeholder="Příklad: Jachtařské rukavice"
            value="{{old('nazev')}}"
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
            value="{{old('znacka')}}"
        />

        @error('znacka')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror

    </div>

    <div class="mb-6">
        <label
            for="cena"
            class="inline-block text-lg mb-2"
            >Cena <span class="text-gray-500"> (v Kč)</span></label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="cena"
            placeholder="Příklad: 12 399"
            value="{{old('cena')}}"
        />
        @error('cena')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
    </div>

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
            value="{{old('rok_vyroby')}}"
        />

        @error('rok_vyroby')
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
            value="{{old('email')}}"
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
            value="{{old('cislo')}}"
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
            value="{{old('lokace')}}"
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
            accept="image/"
            value="{{old('uvodni_fotka')}}"
        />
        @error('uvodni_fotka')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
    </div>

<div class="mb-6">
        <label for="images" class="inline-block text-lg mb-2">
            Fotky
        </label>
        <input
            type="file"
            id="input-file-now-custom-3"
            class="border border-gray-200 rounded p-2 w-full"
            name="images[]"
            accept="image/" multiple/>
        @error('images')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
</div>

    <div class="mb-6">
        <label for="popisek"class="inline-block text-lg mb-2">Popis</label>
        <textarea class="border border-gray-200 rounded p-2 w-full"name="popisek"rows="10"
            placeholder="Napište všechny relevantní informace">{{old('popisek')}}</textarea>
        @error('popisek')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="uvod"class="inline-block text-lg mb-2">Úvodní věta</label>
        <textarea class="border border-gray-200 rounded p-2 w-full"name="uvod"rows="2"
            placeholder="Popište produkt jednou nebo dvěma větami (bude se zobrazovat v přehledu produktů)">{{old('uvod')}}</textarea>
        @error('uvod')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-6">
        <button
            class="bg-royalblue text-white rounded py-2 px-4 hover:bg-black"
        >
            Inzerovat
        </button>

        <a href="/bazar" class="text-black ml-4 hover:text-royalblue"> Zpět do bazaru</a>
    </div>
</form>
</x-karta>
@endsection