<x-layout title="Editar Produtos '{!!  $produtos->nome !!}' ">
    <x-produtos.form :action="route('produtos.update', $produtos->id)"
                     :nome="$produtos->nome"
                     :descricao="$produtos->descricao"
                     :precoUnitario="$produtos->precoUnitario"
                     :qtdEstoque="$produtos->qtdEstoque"
                     :update="true"
    />
</x-layout>
