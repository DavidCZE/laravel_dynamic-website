@props(['produkt'])

<x-karta>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block object-contain transition duration-300 ease-in-out hover:scale-110"
            src="{{asset('images/royal-ocean-low-resolution-logo-black-on-white-background.png')}}"
            alt=""
        />
        <div>
            <h3 class="text-3xl">
                <a href="/produkty/{{$produkt['id']}}">{{$produkt->nazev}}</a>
            </h3>
            <div class="text-lg mt-2">
                <i class="fas fa-tag"></i> <a href="/produkty/{{$produkt['id']}}">{{$produkt->cena}} Kč</a> 
            </div>
            <div>
                <p class="mt-3 text-xl"><a href="/produkty/{{$produkt['id']}}">{{$produkt->uvod}}</a></p>
            </div>
        </div>
    </div>
</x-karta>