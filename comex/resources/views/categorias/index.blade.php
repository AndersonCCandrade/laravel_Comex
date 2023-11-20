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
                    <div>
                    {{$list->nome}}

                    <form action="{{ route('categorias.destroy', $list->id) }}" method="post">
                        @csrf

                        <button >X</button>
                    </form>
                    </div>
                </li>
            <br>
        @endforeach
    </ul>
</x-layout>
