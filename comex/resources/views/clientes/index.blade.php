<x-layout title="Clientes">
    <br>

    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{$mensagemSucesso}}
        </div>
        <br>
    @endisset

    <a href="{{route('clientes.create')}}" class="btn btn-dark mb-2">Adicionar</a>
    <br><br>
    <ul class="list-group">
        @foreach ($clientes as $cliente)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$cliente->nome}}
            <!--    <span>
                        <form action="{{ route('categorias.destroy', $cliente->id) }}" method="post">

                            <a href="{{ route('categorias.edit', $cliente->id) }}" class="btn btn-primary btn-sm">
                               Editar
                            </a>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Remover</button>

                        </form>
                    </span>
            -->
            </li>
            <br>
        @endforeach
    </ul>
</x-layout>
