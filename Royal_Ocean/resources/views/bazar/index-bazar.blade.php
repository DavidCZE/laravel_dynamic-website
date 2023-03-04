@extends('layout')

@section('content')
@include('partials.hero')
@include('partials.search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">


@if(count($bazar) == 0)
<p class="text-red-600">Momentálně nemáme žádné produkty k dispozici</p>
@endif
@foreach($bazar as $bazarItem)
 <x-bazarItem-karta :bazarItem="$bazarItem" />
@endforeach

</div>

@endsection