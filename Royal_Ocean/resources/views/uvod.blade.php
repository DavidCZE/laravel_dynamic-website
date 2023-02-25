@extends('layout')

@section('content')

<h1>{{$heading}}</h1>
@if(count($produkty) == 0):
<p>Momentálně nemáme žádné produkty k dispozici</p>
@endif
@foreach($produkty as $produkt)
    <h2><a href="/uvod/{{$produkt['id']}}">{{$produkt['nazev']}}</a></h2>
    <p>{{$produkt['popisek']}}</p>
@endforeach

@endsection