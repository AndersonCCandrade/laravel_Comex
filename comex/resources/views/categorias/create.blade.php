<x-layout title="Nova Categoria">
    <form action="{{ route('categorias.store') }}" method="post">
        @csrf
        <div>
            <label for="nome" >Nome:</label>
            <input type="text" id="nome" name="nome">
        </div>
        <br>
        <button type="submit" >Adicionar</button>
    </form>
</x-layout>
