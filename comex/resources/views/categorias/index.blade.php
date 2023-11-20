<x-layout title="Categorias">
    <br>

    @isset($mensagemSucesso)
        <div>
            {{$mensagemSucesso}}
        </div>
        <br>
    @endisset

    <a href="{{route('categorias.create')}}">Adicionar</a>
    <br>
    <ul >
        @foreach ($categoria as $list)
            <li>
               {{$list->nome}}
            </li>
        @endforeach
    </ul>
</x-layout>
