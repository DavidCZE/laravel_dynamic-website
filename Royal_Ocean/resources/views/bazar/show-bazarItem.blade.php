<?php Use App\Models\BazarImage; ?>

@extends('layout')

@section('content')

<a href="/bazar" class="inline-block text-black ml-4 mb-4 hover:text-gray-400">
    <i class="fa-solid fa-arrow-left hover:text-gray-400"></i> Zpět</a>
<div class="mx-4">
<x-karta class="p-10">
    <div class="flex items-center">
        <img class="object-contain h-8/12 w-8/12 mb-6 mr-10" src="{{$bazarItem->uvodni_fotka ? 
            asset('storage/' . $bazarItem->uvodni_fotka) : asset('/images/royal-ocean-low-resolution-logo-white-on-black-background.png')}}"/>
        <div class="">
            <h3 class="text-5xl mb-6 font-bold">{{$bazarItem->nazev}}</h3>
            <div class="text-xl mb-4">  Značka: <strong>{{$bazarItem["znacka"]}}</strong></div>
            <div class="text-xl mb-4">  Cena: <strong>{{$bazarItem["cena"]}} Kč</strong></div>
            <div class="text-xl mb-4">  Rok výroby: <strong>{{$bazarItem["rok_vyroby"]}}</strong></div>
            <div class="text-xl mb-4">  Místo vyzvednutí: <strong>{{$bazarItem["lokace"]}}</strong></div>
        </div>
    </div>
    
        <div class="border border-gray-200 w-full mb-6"></div>
    <div class="flex flex-col items-center justify-center text-center">
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

<div>
    @foreach ($images as $image)
        <img src="{{ asset('storage/' . $image->path) }}" alt="">
    @endforeach
</div>

{{--@php
$images = [];

if (file_exists($bazarItem->fotka1)) {
    $images[] = $bazarItem->fotka1;
}
@endphp

<div class="glide">
    <div class="glide__track" data-glide-el="track">
      <ul class="glide__slides">
        @foreach ($images as $image)
          <li class="glide__slide">
            <img src="{{ asset('storage/' . $image->filename) }}">
          </li>
        @endforeach
      </ul>
    </div>
  </div>
  --}}

<div class="flex flex-wrap -mx-4">
    @if($bazarItem->fotka1)
    <div class="w-1/2 pl-4">
        <img class="w-full" src="{{ asset('storage/' . $bazarItem->fotka1) }}" />
    </div>
    @endif
    @if($bazarItem->fotka2)
    <div class="w-1/2 pr-4">
        <img class="w-full" src="{{ asset('storage/' . $bazarItem->fotka2) }}" />
    </div>
    @endif
    @if($bazarItem->fotka3)
    <div class="w-1/2 px-4">
        <img class="object-contain h-80 w-full" src="{{ asset('storage/' . $bazarItem->fotka3) }}" />
    </div>
    @endif
    @if($bazarItem->fotka4)
    <div class="w-1/2 px-4">
        <img class="object-contain h-80 w-full" src="{{ asset('storage/' . $bazarItem->fotka4) }}" />
    </div>
    @endif
    @if($bazarItem->fotka5)
    <div class="w-1/2 px-4">
        <img class="w-full" src="{{ asset('storage/' . $bazarItem->fotka5) }}" />
    </div>
    @endif
    @if($bazarItem->fotka6)
    <div class="w-1/2 px-4">
        <img class="w-full" src="{{ asset('storage/' . $bazarItem->fotka6) }}" />
    </div>
    @endif
    @if($bazarItem->fotka7)
    <div class="w-1/2 px-4">
        <img class="w-full" src="{{ asset('storage/' . $bazarItem->fotka7) }}" />
    </div>
    @endif
    @if($bazarItem->fotka8)
    <div class="w-1/2 px-4">
        <img class="w-full" src="{{ asset('storage/' . $bazarItem->fotka8) }}" />
    </div>
    @endif
    @if($bazarItem->fotka9)
    <div class="w-1/2 px-4">
        <img class="w-full" src="{{ asset('storage/' . $bazarItem->fotka9) }}" />
    </div>
    @endif
    @if($bazarItem->fotka10)
    <div class="w-1/2 px-4">
        <img class="w-full" src="{{ asset('storage/' . $bazarItem->fotka10) }}" />
    </div>
    @endif
</div>

@endsection