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
        <a href={{route('bazarItem.fotky', $bazarItem->id)}}>Fotky</a>
    </div>


</x-karta>

{{--@if($bazarItem->fotky->count() > 0)
    <h2>Fotky</h2>
    <div class="row">
        @foreach($bazarItem->fotky as $image)
            <div class="col-md-4 mb-3">
                <img src="{{ asset('bazar_fotky/' . $image->fotka) }}" alt="">
            </div>
        @endforeach
    </div>
@endif--}}

</div>

@endsection