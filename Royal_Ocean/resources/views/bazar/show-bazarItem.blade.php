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
@unless(count($bazarItem->images) == 0)
<div class="flex flex-wrap justify-center items-center">
    @foreach($bazarItem->images as $image)
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-2">
            <img class="w-full rounded-lg shadow-md" src="{{ asset('images/bazar/'.$image->image) }}" alt="Image">
        </div>
    @endforeach
</div>
@endunless

@endsection