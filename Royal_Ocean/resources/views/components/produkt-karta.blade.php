@props(['produkt'])

<x-karta>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block object-contain"
            src="{{asset('images/royal-ocean-low-resolution-logo-black-on-white-background.png')}}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/produkty/{{$produkt['id']}}">{{$produkt->pnazev}}</a>
            </h3>
            <h3 class="text-2xl">
                <a href="/produkty/{{$produkt['id']}}">{{$produkt->pcena}}</a>
            </h3>
            <div class="text-lg mt-4">
                <i class="fa-solid"></i><a href="/produkty/{{$produkt['id']}}">{{$produkt['prok_vyroby']}}</a>
            </div>
            <div>
                <p class="mt-5 text-xl"><a href="/produkty/{{$produkt['id']}}">{{$produkt->puvod}}</a></p>
            </div>
        </div>
    </div>
</x-karta>