@extends('layout')

@section('content')

<x-karta class="p-10">
    <header>
        <h1
            class="text-3xl text-center font-bold my-6 uppercase"
        >
            Upravit inzeráty
        </h1>
    </header>

    <table class="w-full table-auto rounded-sm">
        <tbody>
           @unless ($bazar->isEmpty())
           @foreach ($bazar as $bazarItem)

               
            <tr class="border-gray-300">
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                    <a href="/bazar/{{$bazarItem['id']}}">
                        {{$bazarItem->nazev}}
                    </a>
                </td>
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                    <a
                        href="/bazar/{{$bazarItem->id}}/edit"
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
                    <form method="POST" action='/bazar/{{$bazarItem->id}}'>
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
                    Žádné aktivní inzeráty
                </p>
            </td>
        </tr>
        @endunless
    </table>
</x-karta>
    
@endsection