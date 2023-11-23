<form action="{{$action}}" method="post">
    @csrf
    @isset($nome)
        @method('PUT')
    @endisset
    <br>
    <div class="row mb-3">
        <div class="col-4">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" autofocus id="nome" name="nome" class="form-control"
                   @isset($nome) value="{{$nome}}" @endisset
            >
        </div>

        <div class="col-4">
            <label for="descricao" class="form-label">Descrição:</label>
            <input type="text" id="descricao" name="descricao" class="form-control"
                   @isset($descricao) value="{{$descricao}}" @endisset
            >
        </div>

        <div class="col-2">
            <label for="precoUnitario" class="form-label">Preço Unitário:</label>
            <input type="number"  id="precoUnitario" name="precoUnitario" class="form-control"
                   @isset($precoUnitario) value="{{$precoUnitario}}" @endisset
            >
        </div>

        <div class="col-2">
            <label for="qtdEstoque" class="form-label">Quantidade em Estoque:</label>
            <input type="number"  id="qtdEstoque" name="qtdEstoque" class="form-control"
                   @isset($qtdEstoque) value="{{$qtdEstoque}}" @endisset
            >
        </div>
    </div>

    <button type="submit" class="btn btn-primary">
        @isset($nome)
            Atualizar
        @else
            Adicionar
        @endisset
    </button>
</form>
