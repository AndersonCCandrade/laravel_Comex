<x-layout title="Categorias">
    <a href="{{route('categorias.create')}}">Adicionar</a>
    <ul >
        @foreach ($categoria as $list)
            <li>
               {{$list->nome}}
            </li>
        @endforeach
    </ul>
</x-layout>
