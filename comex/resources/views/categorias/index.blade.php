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
                    <span>
                        <form action="{{ route('categorias.destroy', $list->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button >Remover</button>
                        </form>
                        <form action="{{ route('categorias.edit', $list->id) }}" method="post">
                            @method('GET')
                            <button >Editar</button>
                        </form>
                    </span>

                </li>
            <br>
        @endforeach
    </ul>
</x-layout>
