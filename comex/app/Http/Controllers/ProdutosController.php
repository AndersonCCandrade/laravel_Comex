<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutosFormRequest;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $produtos = Produto::all();
        $mensagemSucesso = session('mensagem.sucesso');


        return view("produtos.index", compact('produtos'))
            ->with('mensagemSucesso', $mensagemSucesso);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProdutosFormRequest $request)
    {

        $produtos = Produto::create($request->all());


        return to_route('produtos.index')
            ->with('mensagem.sucesso', "Produto '{$produtos->nome}' adicionada com sucesso");
    }

    /**
     * Edit the specified resource in storage.
     */
    public function edit(Produto $produto)
    {
        return view('produtos.edit')->with('produtos', $produto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Produto $produto,  ProdutosFormRequest $request)
    {
        $produto->fill($request->all());
        $produto->save();

        return to_route('produtos.index')
            ->with('mensagem.sucesso', "Produto '{$produto->nome}' atualizado com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {

        $produto->delete();

        return to_route('produtos.index')
            ->with('mensagem.sucesso', "Produto '{$produto->nome}' removido com sucesso");
    }


}
