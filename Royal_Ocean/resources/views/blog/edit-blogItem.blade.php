@extends('layout')

@section('content')
<x-karta class="max-w-lg mx-auto mt-24 p-10">
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1">
        Upravit Článek
    </h2>
    <p class="mb-4">Upravit <strong>{{$blogItem->nazev}}</strong></p>
</header>

<form method="POST" action="/blog/{{$blogItem->id}}" enctype="multipart/form-data">
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
            value="{{$blogItem->nazev}}"
        />

        @error('nazev')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror

    </div>

    <div class="mb-6"><label for="obsah"class="inline-block text-lg mb-2">Obsah</label><textarea class="border border-gray-200 rounded p-2 w-full"name="obsah"rows="10">{{$blogItem->obsah}}</textarea>
        @error('obsah')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-6">
        <button
            class="bg-royalblue text-white rounded py-2 px-4 hover:bg-black"
        >
            Upravit
        </button>

        <a href="/blog" class="text-black ml-4 hover:text-royalblue"> Zpět ke všem článkům</a>
    </div>
</form>
</x-karta>
@endsection