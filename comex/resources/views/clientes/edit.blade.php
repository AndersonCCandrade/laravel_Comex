<x-layout title="Editar Cliente '{!!  $clientes->nome !!}' ">

    <x-clientes.form :$ufs :action="route('clientes.update', $clientes->id ) "
                     :nome="$clientes->nome"
                     :cpf="$clientes->cpf"
                     :telefone="$clientes->telefone"
                     :rua="$clientes->enderecos->rua"
                     :numero="$clientes->enderecos->numero"
                     :complemento="$clientes->enderecos->complemento"
                     :bairro="$clientes->enderecos->bairro"
                     :cidade="$clientes->enderecos->cidade"
                     :estado="$clientes->enderecos->estado"
                     :update="true"
    />
</x-layout>
