@extends('layout')

@section('content')

<a href="/bazar" class="inline-block text-black ml-4 mb-4">
    <i class="fa-solid fa-arrow-left"></i> Zpět</a>
<div class="mx-4">
<x-karta class="p-10">
    <div
        class="flex flex-col items-center justify-center text-center">

        <h3 class="text-4xl mb-2 font-bold">{{$bazarItem->nazev}}</h3>
        <div class="text-xl mb-4">{{$bazarItem["znacka"]}}</div>
        <div class="text-xl mb-4">{{$bazarItem["rokVyroby"]}}</div>
        
        <div class="border border-gray-200 w-full mb-6"></div>
        <div>
            <h3 class="text-2xl font-bold mb-4">
                Popis
            </h3>
            <div class="text-lg space-y-6">
                <p>{{$bazarItem->popisek}}</p>
            </div>
            <a
            href="mailto:{{$bazarItem->email}}"
            class="block bg-royalblue text-white mt-6 py-2 rounded-xl hover:opacity-80"
            ><i class="fa-solid fa-envelope"></i>
            Kontaktovat prodejce (E-mail: {{$bazarItem->email}})</a>
            <p
            class="block bg-royalblue text-white mt-6 py-2 rounded-xl hover:opacity-80">
            <i class="fa-solid fa-phone"></i>
            Číslo prodejce: {{$bazarItem->cislo}} </p>
        </div>
    </div>
</x-karta>
</div>

@endsection