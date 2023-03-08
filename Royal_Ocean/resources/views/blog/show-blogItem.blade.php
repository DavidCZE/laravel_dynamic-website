@extends('layout')

@section('content')

<a href="/blog" class="inline-block text-black ml-4 mb-4 hover:text-gray-400">
    <i class="fa-solid fa-arrow-left hover:text-gray-400"></i> Zpět</a>
<div class="mx-4">
<x-karta class="p-10">
    <div
        class="flex flex-col items-center justify-center text-center">

        <h3 class="text-4xl mb-2 font-bold">{{$blogItem->nazev}}</h3>
        
        <div class="border border-gray-200 w-full mb-6"></div>
            <div class="text-lg space-y-6">
                <p>{{$blogItem->obsah}}</p>
            </div>
    </div>
</x-karta>
</div>

@endsection