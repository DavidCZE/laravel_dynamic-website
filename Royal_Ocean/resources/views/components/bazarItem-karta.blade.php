@props(['bazarItem'])

<x-karta>
    <div class="flex ">
        <img
            class="hidden w-48 mr-6 md:block object-contain transition duration-300 ease-in-out hover:scale-110"
            src="{{$bazarItem->uvodni_fotka ? asset('storage/' . $bazarItem->uvodni_fotka) : asset('/images/royal-ocean-low-resolution-logo-white-on-black-background.png')}}"
        />
        <div>
            <h3 class="text-3xl">
                <a href="/bazar/{{$bazarItem['id']}}">{{$bazarItem->nazev}}</a>
            </h3>
            <div class="text-lg mt-2">
                <i class="fas fa-tag"></i><a href="/bazar/{{$bazarItem['id']}}"> {{$bazarItem['cena']}} Kč</a>
            </div>
            <div class="text-lg mt-2">
                <i class="fa-solid fa-map-marker"></i><a href="/bazar/{{$bazarItem['id']}}"> {{$bazarItem['lokace']}}</a>
            </div>
            <div>
                <p class="mt-3 text-xl"><a href="/bazar/{{$bazarItem['id']}}">{{$bazarItem->uvod}}</a></p>
            </div>
        </div>
    </div>
</x-karta>