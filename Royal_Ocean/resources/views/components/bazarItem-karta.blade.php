@props(['bazarItem'])

<x-karta>
    <div class="flex ">
        <img
            class="hidden w-48 mr-6 md:block object-contain"
            src="{{$bazarItem->uvodni_fotka ? asset('storage/' . $bazarItem->uvodni_fotka) : asset('/images/royal-ocean-low-resolution-logo-white-on-black-background.png')}}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/bazar/{{$bazarItem['id']}}">{{$bazarItem->nazev}}</a>
            </h3>
            <div class="text-lg mt-4">
                <i class="fa-solid"></i><a href="/bazar/{{$bazarItem['id']}}">{{$bazarItem['znacka']}}</a>
            </div>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-map-marker"></i><a href="/bazar/{{$bazarItem['id']}}"> {{$bazarItem['lokace']}}</a>
            </div>
            <div class="text-lg mt-4">
                <i class="fa-solid"></i><a href="/bazar/{{$bazarItem['id']}}">{{$bazarItem['rok_vyroby']}}</a>
            </div>
            <div>
                <p class="mt-5 text-xl"><a href="/bazar/{{$bazarItem['id']}}">{{$bazarItem->uvod}}</a></p>
            </div>
        </div>
    </div>
</x-karta>