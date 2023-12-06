<x-layout title="Produtos em Estoque">
    <br>

    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{$mensagemSucesso}}
        </div>
        <br>
    @endisset

    <a href="{{route('produtos.create')}}" class="btn btn-dark mb-2">Adicionar</a>
    <br><br>
    <ul class="list-group">
        <div class="container text-start list-group-item fw-bold" >
            <div class="row">
                <label for="nome" class="form-label col-2">Nome: </label>
                <label for="nome" class="form-label col-2">Descrição: </label>
                <label for="nome" class="form-label col-2">Categoria: </label>
                <label for="nome" class="form-label col-2">Preço R$: </label>
                <label for="nome" class="form-label col-2">Quantidade: </label>
            </div>

        </div>
        <br>
        @foreach ($produtos as $produto)

            <li class="list-group-item text-start list-group-item">
                <span class="row">
                    <div class="col-2 d-flex" >{{$produto->nome}}</div>
                    <div class="col-2 d-flex" >{{$produto->descricao}}</div>
                    <div class="col-2 d-flex" >{{$produto->categoria->nome}}</div>
                    <div class="col-2 d-flex" >{{$produto->precoUnitario}}</div>
                    <div class="col-2 d-flex" >{{$produto->qtdEstoque}}</div>
                    <div class="col-2 d-flex">
                        <form action="{{ route('produtos.destroy', $produto->id) }}" method="post">

                            <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-primary btn-sm">
                               Editar
                            </a>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Remover</button>
                        </form>
                    </div>

                </span>
            </li>
        @endforeach


    </ul>
</x-layout>
