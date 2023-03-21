@props(['blogItem'])
@php
use Illuminate\Support\Str;
@endphp
<x-karta>
    <div class="flex">
       {{--<img
            class="hidden w-48 mr-6 md:block object-contain"
            src="{{asset('images/royal-ocean-low-resolution-logo-black-on-white-background.png')}}"
            alt=""
        />--}}
        <div>
            <h3 class="text-2xl">
                <a href="/blog/{{$blogItem['id']}}">{{$blogItem->nazev}}</a>
            </h3>
            <p class="mt-2 text-sm">
                <a href="/blog/{{$blogItem['id']}}">{{Str::limit($blogItem->obsah, 150)}}</a>
            </p>
            {{--<div class="text-lg mt-4">
                <i class="fa-solid"></i><a href="/produkty/{{$produkt['id']}}">{{$produkt['rok_vyroby']}}</a>
            </div>
            <div>
                <p class="mt-5 text-xl"><a href="/produkty/{{$produkt['id']}}">{{$produkt->uvod}}</a></p>
            </div>--}}
        </div>
    </div>
</x-karta>