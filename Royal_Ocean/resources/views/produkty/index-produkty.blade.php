@extends('layout')

@section('content')
@include('partials.hero')

@can('everything')
<ul class="flex items-center align-middle content-center space-x-7 ml-6 mb-5">
    <li>    
        <a href="/produkty/manage" class="hover:text-royalblue">
            <i class="fa-solid fa-gear"></i>
            Spravovat produkty</a>
    </li>
    <li>
        <a href="/produkty/create" class="hover:text-royalblue">
            <i class="fas fa-paste"></i>
            Přidat produkt</a>
    </li>
</ul>
@endcan

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

@if(count($produkty) == 0)
<p class="text-red-600">Momentálně nemáme žádné produkty k dispozici</p>
@endif
@foreach($produkty as $produkt)
 <x-produkt-karta :produkt="$produkt" />
@endforeach

</div>

<div class="mt-6 pd-4">
    {{$produkty->links()}}
</div>

@endsection