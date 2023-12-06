<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientesFormRequest;
use App\Models\Cliente;
use App\Models\Endereco;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public array $ufs = ['','AC','AL','AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR',
        'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO',
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $clientes = Cliente::all();
        $mensagemSucesso = session('mensagem.sucesso');


        return view("clientes.index", compact('clientes'))
            ->with('mensagemSucesso', $mensagemSucesso);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ufs= $this->ufs;

        return view('clientes.create', compact('ufs'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientesFormRequest $request)
    {
        $clientes = Cliente::create($request->all());
        $clientes->enderecos()->create($request->all());

        return to_route('clientes.index')
            ->with('mensagem.sucesso', "Cliente '{$clientes->nome}' adicionado com sucesso");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {

        $ufs= $this->ufs;

        return view('clientes.edit', compact('ufs'))
            ->with('clientes', $cliente);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Cliente $cliente, ClientesFormRequest $request)
    {

        $cliente->update($request->all());
        $cliente->enderecos()->update([
            'rua'           => $request->rua,
            'numero'        => $request->numero,
            'complemento'   => $request->complemento,
            'bairro'        => $request->bairro,
            'cidade'        => $request->cidade,
            'estado'        => $request->estado,
            'cliente_id'    => $cliente->id,
        ]);

        return to_route('clientes.index')
            ->with('mensagem.sucesso', "Cliente '{$cliente->nome}' atualizado com sucesso");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->enderecos()->delete();
        $cliente->delete();
        return to_route('clientes.index')->with('mensagem.sucesso', "Cliente '{$cliente->nome}' removido com sucesso");
    }
}
