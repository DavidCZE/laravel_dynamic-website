@extends('layout')

@section('content')
<h1 class="font-bold">{{$heading}}</h1>
<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">


@if(count($bazar) == 0)
<p class="text-red-600">Momentálně nemáme žádné produkty k dispozici</p>
@endif
@foreach($bazar as $bazarItem)
<div class="bg-gray-50 border border-gray-200 rounded p-6">
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="images/royal-ocean-low-resolution-logo-white-on-black-background.png"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/bazar/{{$bazarItem['id']}}">{{$bazarItem->nazev}}</a>
            </h3>
            <div class="text-lg mt-4">
                <i class="fa-solid"></i>{{$bazarItem['rok vyroby']}}
            </div>
        </div>
    </div>
</div>
@endforeach

</div>

@endsection