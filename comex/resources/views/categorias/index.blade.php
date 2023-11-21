<x-layout title="Categorias">
    <br>

    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{$mensagemSucesso}}
        </div>
        <br>
    @endisset

    <a href="{{route('categorias.create')}}" class="btn btn-dark mb-2">Adicionar</a>
    <br><br>
    <ul class="list-group">
        @foreach ($categoria as $list)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$list->nome}}
                    <span>
                        <form action="{{ route('categorias.destroy', $list->id) }}" method="post">

                            <a href="{{ route('categorias.edit', $list->id) }}" class="btn btn-primary btn-sm">
                               Editar
                            </a>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Remover</button>

                        </form>
                    </span>

                </li>
            <br>
        @endforeach
    </ul>
</x-layout>
