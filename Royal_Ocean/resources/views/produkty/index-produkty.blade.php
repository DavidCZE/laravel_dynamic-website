@extends('layout')

@section('content')
@include('partials.hero')

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