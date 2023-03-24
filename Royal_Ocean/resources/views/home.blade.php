@extends('layout')

@section('content')
@include('partials.hero')

<div>
    <h1 class="ml-8 mt-7 text-7xl font-montserrat">Jsme tu pro vás <br> již 10 let</h1>
    <div class="ml-8 mt-12 left-10 object-center">
        <a href="https://time.is/Prague" id="time_is_link" rel="nofollow" style="font-size:28px">Čas v Praze:</a>
        <span id="Prague_z721" style="font-size:28px"></span>
        <script src="//widget.time.is/t.js"></script>
        <script>
        time_is_widget.init({Prague_z721:{}});
        </script>
    </div>

</div>

@endsection