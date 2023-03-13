@extends('layout')

@section('content')
<x-karta class="max-w-lg mx-auto mt-24 p-10">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Přidat Produkt
        </h2>
    </header>

    <form role="form" method="POST" action="/produkty" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="mb-6">
            <label
                for="pcena"
                class="inline-block text-lg mb-2"
                >Cena</label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="pcena"
                value="{{old('pcena')}}"/>
            @error('pcena')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>


        <div class="mb-6">
            <label for="pnazev" class="inline-block text-lg mb-2"
                >Název</label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="pnazev"
                placeholder="Příklad: Jachtařské rukavice"
                value="{{old('pnazev')}}"/>

            @error('pnazev')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

        </div>

        <div class="mb-6">
            <label for="puvodni_fotka" class="inline-block text-lg mb-2">
                Úvodní fotka
            </label>
            <input
                type="file"
                class="border border-gray-200 rounded p-2 w-full"
                name="puvodni_fotka"
                value="{{old('puvodni_fotka')}}"/>
            @error('puvodni_fotka')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        {{--
        <div class="form-group" style="padding-bottom: 15px">                            
            <label for="images" class="inline-block text-lg mb-2">Nahrát fotky <span class="text-gray-400">(Označte a nahrajte všechny vybrané fotky najednou)</span></label>
            <input class="border border-gray-200 rounded p-2 w-full"  type="file" name="images[]" multiple><br/>
        </div>
        --}}
        {{-- 
        <div class="mb-6">
            <label for="fotky" class="inline-block text-lg mb-2">
                Fotky
            </label>
            <input
                type="file"
                class="border border-gray-200 rounded p-2 w-full"
                name="fotky[]"
                accept="image/"
            multiple/>
            @error('fotky')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        --}}
        <div class="mb-6">
            <label for="ppopisek"class="inline-block text-lg mb-2">Popis</label>
            <textarea class="border border-gray-200 rounded p-2 w-full"name="ppopisek"rows="10"
                placeholder="Napište všechny relevantní informace">{{old('ppopisek')}}</textarea>
            @error('ppopisek')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="puvod"class="inline-block text-lg mb-2">Úvodní věta</label>
            <textarea class="border border-gray-200 rounded p-2 w-full"name="puvod"rows="2"
                placeholder="Popište produkt jednou nebo dvěma větami (bude se zobrazovat v přehledu produktů)">{{old('puvod')}}</textarea>
            @error('puvod')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
                <button type="submit" class="bg-royalblue text-white rounded py-2 px-4 hover:bg-black">Nabídnout</button>
            <a href="/produkty" class="text-black ml-4 hover:text-royalblue"> Zpět ke všem produktům</a>
        </div>
    </form>
</x-karta>
@endsection