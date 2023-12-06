<form action="{{$action}}" method="post">
    @csrf
    @isset($nome)
        @method('PUT')
    @endisset
    <br>
    <div class="row mb-4">
        <div class="col-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" autofocus id="nome" name="nome" class="form-control"
                   value="{{isset($nome) ? $nome : old('nome') }}"
            >
        </div>

        <div class="col-3">
            <label for="descricao" class="form-label">Descrição:</label>
            <input type="text" id="descricao" name="descricao" class="form-control"
                   value="{{isset($nome) ? $descricao : old('descricao') }}"
            >
        </div>

        <div class="col-2">
            <label for="categoria" class="form-label">Categoria:</label>

            <select  name="categoria_id" class="form-select">

                <option selected @isset($nome) value="{{$categoria->id}}">
                    {{$categoria->nome}}
                    @endisset
                </option>

                @foreach($categorias as $categoria)
                    <option value="{{$categoria->id}}">
                        {{$categoria->nome}}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-2">
            <label for="precoUnitario" class="form-label">Preço Unitário:</label>
            <input type="number"  step="0.01" id="precoUnitario" name="precoUnitario" class="form-control"
                   value="{{isset($nome) ? $precoUnitario : old('precoUnitario') }}"
            >
        </div>

        <div class="col-2">
            <label for="qtdEstoque" class="form-label">Quantidade em Estoque:</label>
            <input type="number"  id="qtdEstoque" name="qtdEstoque" class="form-control"
                   value="{{isset($nome) ? $qtdEstoque : old('qtdEstoque') }}"
            >
        </div>
    </div>

    <button type="submit" class="btn btn-primary">
        {{isset($nome) ? "Atualizar" : "Adicionar"}}
    </button>
</form>
