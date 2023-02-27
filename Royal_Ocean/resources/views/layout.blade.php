<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Royal Ocean</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1 class="text-3xl font-bold text-indigo-600"><a href="/">Royal Ocean</a></h1>
    <h3><a href="/bazar">Bazar</a></h3>
    {{-- VIEW OUTPUT --}}
    @yield('content')
</body>
</html>