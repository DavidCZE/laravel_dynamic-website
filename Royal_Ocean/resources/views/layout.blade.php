<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="{{asset('images/royal-ocean-website-favicon-color.png')}}" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            'royalblue': '#0023FF',
                        },
                    },
                },
            };
        </script>
        <title>Royal Ocean</title>
    </head>
    <body>
        <nav class="flex justify-between items-center">
            <a href="/"
                ><img class="w-36" src="images/logo.png" alt=""
            /></a>
            <ul class="flex align-middle content-center space-x-5">
                <li>
                    <a href="/" class="hover:text-royalblue">Domů</a>
                </li>
                <li>
                    <a href="/" class="hover:text-royalblue">Naše lodě</a>
                </li>
                <li>
                    <a href="/bazar" class="hover:text-royalblue">Bazar</a>
                </li>
                <li>
                    <a href="/bazar" class="hover:text-royalblue">Blog</a>
                </li>
                <li>
                    <a href="/bazar" class="hover:text-royalblue">Náš Tým</a>
                </li>
            </ul>
            <ul class="flex space-x-6 mr-6 text-lg">
                @auth
                <li>
                    <span class="font-bold-uppercase"><strong>{{auth()->user()->name}}</strong>, vítej u nás!</span>
                </li>
                <li>
                    <a href="/bazar/manage" class="hover:text-royalblue">
                        <i class="fa-solid fa-gear"></i>
                        Spravovat inzeráty</a>
                </li>
                <li>
                    <form class="inline" method="POST" action="/logout">
                        @csrf
                        <button type="submit">
                            <i class="fa-solid fa-door-closed hover:text-royalblue"></i>
                        </button>
                    </form>
                </li>
                @else
                <li>
                    <a href="/register" class="hover:text-royalblue">
                        <i class="fa-solid fa-user-plus"></i> Registrovat se</a>
                </li>
                <li>
                    <a href="/login" class="hover:text-royalblue">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Přihlásit se</a>
                </li>
                @endauth
            </ul>
        </nav>

        <main>

        @yield('content')
        
        </main>
<footer class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-royalblue text-white h-24 mt-24 opacity-90 md:justify-center">
        <p class="ml-2"><?php echo "David Malínek - "; echo date('Y');?> </p>

        <a
            href="/bazar/create"
            class="absolute top-1/3 right-10 bg-black text-white py-2 px-5 hover:text-royalblue"
            >Inzerovat produkt</a
        >
    </footer>
    <x-flash-message />
</body>
</html>