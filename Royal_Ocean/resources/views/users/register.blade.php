@extends('layout')

@section('content')

<x-karta class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Registrovat se
        </h2>
        <p class="mb-4">Registrujte se, abyste mohli přidávat inzeráty</p>
    </header>

    <form method="POST" action="/users">
        @csrf
        <div class="mb-6">
            <label for="jmeno" class="inline-block text-lg mb-2">
                Vaše Jméno
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="jmeno"
            />
            @error('jmeno')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2"
                >Váš Email</label
            >
            <input
                type="email"
                class="border border-gray-200 rounded p-2 w-full"
                name="email"
            />
            @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="password"
                class="inline-block text-lg mb-2"
            >
                Heslo
            </label>
            <input
                type="password"
                class="border border-gray-200 rounded p-2 w-full"
                name="password"
            />
            @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="password_confirmation"
                class="inline-block text-lg mb-2"
            >
                Potvrdit heslo
            </label>
            <input
                type="password"
                class="border border-gray-200 rounded p-2 w-full"
                name="password_confirmation"
            />
            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button
                type="submit"
                class="bg-royalblue text-white rounded py-2 px-4 hover:bg-black"
            >
                Registrovat se
            </button>
        </div>

        <div class="mt-8">
            <p>
                Už máte účet?
                <a href="/login" class="text-royalblue"
                    >Přihlásit se</a
                >
            </p>
        </div>
    </form>
</x-karta>

@endsection