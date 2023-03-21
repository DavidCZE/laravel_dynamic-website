@extends('layout')

@section('content')

<x-karta class="p-10">
    <header>
        <h1
            class="text-3xl text-center font-bold my-6 uppercase"
        >
            Upravit produkty
        </h1>
    </header>

    <table class="w-full table-auto rounded-sm">
        <tbody>
           @unless ($produkty->isEmpty())
           @foreach ($produkty as $produkt)

               
            <tr class="border-gray-300">
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                    <a href="/produkty/{{$produkt['id']}}">
                        {{$produkt->nazev}}
                    </a>
                </td>
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                    <a
                        href="/produkty/{{$produkt->id}}/edit"
                        class="text-blue-400 px-6 py-2 rounded-xl"
                        ><i
                            class="fa-solid fa-pen-to-square"
                        ></i>
                        Upravit</a
                    >
                </td>
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                    <form method="POST" action='/produkty/{{$produkt->id}}'>
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500"><i class="fa-solid fa-trash"></i> Vymazat</button>
                        </form>
                </td>
            </tr>
        </tbody>
                       
        @endforeach
        @else
        <tr class="border-gray-300">
            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                <p class="text-center">
                    Žádné produkty
                </p>
            </td>
        </tr>
        @endunless
    </table>
</x-karta>
    
@endsection