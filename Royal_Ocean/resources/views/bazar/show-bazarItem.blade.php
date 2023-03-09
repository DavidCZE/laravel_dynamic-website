<?php Use App\Models\BazarImage; ?>

@extends('layout')

@section('content')

<a href="/bazar" class="inline-block text-black ml-4 mb-4 hover:text-gray-400">
    <i class="fa-solid fa-arrow-left hover:text-gray-400"></i> Zpět</a>
<div class="mx-4">
<x-karta class="p-10">
    <div class="flex flex-col items-center justify-center text-center">
        <img class="w-48 mr-6 mb-6" src="{{$bazarItem->uvodni_fotka ? 
        asset('storage/' . $bazarItem->uvodni_fotka) : asset('/images/royal-ocean-low-resolution-logo-white-on-black-background.png')}}"/>
        <h3 class="text-4xl mb-2 font-bold">{{$bazarItem->nazev}}</h3>
        <div class="text-xl mb-4">{{$bazarItem["znacka"]}}</div>
        <div class="text-xl mb-4">{{$bazarItem["rok_vyroby"]}}</div>
        <div class="text-xl mb-4">{{$bazarItem["lokace"]}}</div>
        
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
            class="block bg-gray-400 text-white mt-6 py-2 rounded-xl">
            <i class="fa-solid fa-phone"></i>
            Číslo prodejce: {{$bazarItem->cislo}} </p>
        </div>
    </div>


</x-karta>

@foreach ($bazarItem->images as $image)
    <img src="{{ $image->url() }}"/>
@endforeach

</div>
{{--<x-karta class="mt-4 p-10 flex space-x-6">
    <a href="/bazar/{{$bazarItem->id}}/edit" class="hover:text-royalblue">
        <i class="fa-solid fa-pencil"></i> Upravit </a>
    <form method="POST" action='/bazar/{{$bazarItem->id}}'>
    @csrf
    @method('DELETE')
    <button class="text-red-500 hover:font-black"><i class="fa-solid fa-trash"></i> Vymazat</button>
    </form>
</x-karta>--}}
@endsection