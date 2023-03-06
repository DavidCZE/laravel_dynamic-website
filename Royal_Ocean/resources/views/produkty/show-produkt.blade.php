@extends('layout')

@section('content')

<a href="/" class="inline-block text-black ml-4 mb-4 hover:text-gray-400">
    <i class="fa-solid fa-arrow-left hover:text-gray-400"></i> Zpět</a>
<div class="mx-4">
<x-karta class="p-10">
    <div
        class="flex flex-col items-center justify-center text-center">

        <h3 class="text-4xl mb-2 font-bold">{{$produkt->nazev}}</h3>
        <div class="text-xl mb-4">{{$produkt["rok_vyroby"]}}</div>
        
        <div class="border border-gray-200 w-full mb-6"></div>
        <div>
            <h3 class="text-2xl font-bold mb-4">
                Popis
            </h3>
            <div class="text-lg space-y-6">
                <p>{{$produkt->popisek}}</p>
            </div>
        </div>
    </div>
</x-karta>
</div>

@endsection