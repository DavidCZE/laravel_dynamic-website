@extends('layout')

@section('content')

<a href="/bazar/{{$bazarItem['id']}}" class="inline-block text-black ml-4 mb-4 hover:text-gray-400">
    <i class="fa-solid fa-arrow-left hover:text-gray-400"></i> Zpět</a>
<h1 class="text-4xl mb-2 font-bold">{{$bazarItem->nazev}}</h1>
<h2>Fotky</h2>
    <div class="row">
        @foreach ($fotky as $fotka)
            <div class="col-md-3">
                <x-karta class="text-white bg-secondary mb-3" style="max-width: 20rem;">
                    <img src="/bazar_fotky/{{$fotka->fotka}}">
                </x-karta>
            </div>
        @endforeach
    </div>
@endsection