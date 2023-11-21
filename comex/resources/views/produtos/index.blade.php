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
                <label for="nome" class="form-label col-3">Nome: </label>
                <label for="nome" class="form-label col-3">Descrição: </label>
                <label for="nome" class="form-label col-3">Preço R$: </label>
                <label for="nome" class="form-label col-3">Quantidade: </label>
            </div>

        </div>
        <br>
        @foreach ($produtos as $produto)
            <li class="list-group-item text-start list-group-item">
                <div class="row">
                    <div class="col-3 d-flex" >{{$produto->nome}}</div>
                    <div class="col-3 d-flex" >{{$produto->descricao}}</div>
                    <div class="col-3 d-flex" >{{$produto->precoUnitario}}</div>
                    <div class="col-3 d-flex" >{{$produto->qtdEstoque}}</div>
                </div>

            </li>
        @endforeach


    </ul>
</x-layout>
