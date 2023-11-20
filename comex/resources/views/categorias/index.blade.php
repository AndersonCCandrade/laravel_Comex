<x-layout title="Categorias">
    <ul >
        @foreach ($categoria as $list)
            <li>
               {{$list}}
            </li>
        @endforeach
    </ul>
</x-layout>
