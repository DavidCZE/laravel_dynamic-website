@extends('layout')

@section('content')
@include('partials.hero')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

    @if(count($blog) == 0)
    <p class="text-red-600">Žádné články k dispozici</p>
    @endif
    @foreach($blog as $blogItem)
     <x-blogItem-karta :blogItem="$blogItem" />
    @endforeach
    
</div>

<div class="mt-6 pt-4">
    {{$blog->links()}}
</div>
    
@endsection