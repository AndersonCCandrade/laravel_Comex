<form action="{{$action}}" method="post">
    @csrf
    <br>
    <div class="row mb-3">
        <div class="col-4">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" autofocus id="nome" name="nome" class="form-control">
        </div>

        <div class="col-4">
            <label for="nome" class="form-label">Descrição:</label>
            <input type="text" id="descricao" name="descricao" class="form-control">
        </div>

        <div class="col-2">
            <label for="nome" class="form-label">Preço Unitário:</label>
            <input type="number" step="0.01" min="0.01" id="precoUnitario" name="precoUnitario" class="form-control">
        </div>

        <div class="col-2">
            <label for="nome" class="form-label">Quantidade em Estoque:</label>
            <input type="number" min="0" id="qtdEstoque" name="qtdEstoque" class="form-control">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>
