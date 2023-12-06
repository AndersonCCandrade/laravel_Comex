<form action="{{$action}}" method="post">
    @csrf
    @isset($nome)
        @method('PUT')
    @endisset
    <br>
    <div class = "mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text"
               autofocus
               id="nome"
               name="nome"
               class="form-control"
               value="{{ isset($nome) ? $nome : old('nome') }}"
        >
    </div>

    <button type="submit" class="btn btn-primary">
        {{isset($nome) ? "Atualizar" : "Adicionar"}}
    </button>
</form>
