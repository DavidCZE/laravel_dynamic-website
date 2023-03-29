@extends('layout')

@section('content')

<a href="/produkty" class="inline-block text-black ml-4 mb-4 hover:text-gray-400">
    <i class="fa-solid fa-arrow-left hover:text-gray-400"></i> Zpět</a>
<div class="mx-4">
<x-karta class="p-10">
    <div class="flex items-center">
        <img class="object-contain h-8/12 w-8/12 mb-6 mr-10" src="{{$produkt->uvodni_fotka ? 
            asset('storage/' . $produkt->uvodni_fotka) : asset('/images/royal-ocean-low-resolution-logo-black-on-white-background.png')}}"/>
        <div class="">
            <h3 class="text-5xl mb-6 font-bold">{{$produkt->nazev}}</h3>
            <div class="text-xl mb-4">  Cena: <strong>{{$produkt["cena"]}} Kč</strong></div>
            <div class="text-xl mb-4">  Rok výroby: <strong>{{$produkt["rok_vyroby"]}}</strong></div>
        </div>
    </div>
    
        <div class="border border-gray-200 w-full mb-6"></div>
    <div class="flex flex-col items-center justify-center text-center">
        <div>
            <h3 class="text-2xl font-bold mb-4">
                Popis
            </h3>
            <div class="text-lg space-y-6">
                <p>{{$produkt->popisek}}</p>
            </div>
            <h4 class="text-1xl font-bold mt-10">
                Máte zájem?
            </h4>
            <a
            href="mailto:sales@royalocean.cz"
            class="block bg-royalblue text-white mt-6 py-2 rounded-xl hover:opacity-80"
            ><i class="fa-solid fa-envelope"></i>
            Kontaktujte nás (E-mail: sales@royalocean.cz)</a>
            <p
            class="block bg-gray-400 text-white mt-6 py-2 rounded-xl">
            <i class="fa-solid fa-phone"></i>
            Zavolejte nám: +420 123 456 789 </p>
        </div>
    </div>
</x-karta>
@unless(count($produkt->pimages) == 0)
<div class="flex flex-wrap justify-center items-center">
    @foreach($produkt->pimages as $pimage)
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-2">
            <img class="w-full rounded-lg shadow-md" src="{{ asset('images/produkty/'.$pimage->pimage) }}">
        </div>
    @endforeach
</div>
@endunless

@endsection