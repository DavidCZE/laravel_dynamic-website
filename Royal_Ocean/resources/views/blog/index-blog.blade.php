@extends('layout')

@section('content')
@include('partials.hero')

@can('everything')
<ul class="flex items-center align-middle content-center space-x-7 ml-6 mb-5">
    <li>    
        <a href="/blog/manage" class="hover:text-royalblue">
            <i class="fa-solid fa-gear"></i>
            Spravovat články</a>
    </li>
    <li>
        <a href="/blog/create" class="hover:text-royalblue">
            <i class="fas fa-pen-fancy"></i>
            Přidat článek</a>
    </li>
</ul>
@endcan

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