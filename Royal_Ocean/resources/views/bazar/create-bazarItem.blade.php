@extends('layout')

@section('content')
<x-karta class="max-w-lg mx-auto mt-24 p-10">
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1">
        Vytvořit inzerát
    </h2>
    <p class="mb-4">Nabídněte vaše jachtařské vybavení k prodeji</p>
</header>

<form method="POST" action="/bazar">
    @csrf
    <div class="mb-6">
        <label
            for="rokVyroby"
            class="inline-block text-lg mb-2"
            >Rok výroby</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="rokVyroby"
        />

        @error('rokVyroby')
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
        />

        @error('cislo')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror

    </div>


    {{--<div class="mb-6">
        <label for="uvodni fotka" class="inline-block text-lg mb-2">
            Úvodní fotka
        </label>
        <input
            type="file"
            class="border border-gray-200 rounded p-2 w-full"
            name="uvodni fotka"
        />
    </div>

    <div class="mb-6">
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

    <div class="mb-6">
        <label
            for="popisek"
            class="inline-block text-lg mb-2"
        >
            Popis
        </label>
        <textarea
            class="border border-gray-200 rounded p-2 w-full"
            name="popisek"
            rows="10"
            placeholder="Napište všechny relevantní informace"
        ></textarea>

        @error('popisek')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror

    </div>

    <div class="mb-6">
        <label
            for="uvod"
            class="inline-block text-lg mb-2"
        >
            Úvodní věta
        </label>
        <textarea
            class="border border-gray-200 rounded p-2 w-full"
            name="uvod"
            rows="2"
            placeholder="Popište produkt jednou nebo dvěma větami (bude se zobrazovat v přehledu produktů)"
        ></textarea>

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