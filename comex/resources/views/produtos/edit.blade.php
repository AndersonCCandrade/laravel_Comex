<x-layout title="Editar Produtos '{!!  $produtos->nome !!}' ">

    <x-produtos.form :$categorias :action="route('produtos.update', $produtos->id)"
                     :nome="$produtos->nome"
                     :descricao="$produtos->descricao"
                     :categoria="$produtos->categoria"
                     :precoUnitario="$produtos->precoUnitario"
                     :qtdEstoque="$produtos->qtdEstoque"
                     :update="true"
    />
</x-layout>
