<form action="{{$action}}" method="post">
    @csrf
    @isset($nome)
        @method('PUT')
    @endisset
    <div>
        <label for="nome" >Nome:</label>
        <input type="text"
               id="nome"
               name="nome"
               @isset($nome) value="{{ $nome }}" @endisset
        >
    </div>
    <br>
    <button type="submit" >
        @isset($nome)
            Atualizar
        @else
            Adicionar
        @endisset
    </button>
</form>
