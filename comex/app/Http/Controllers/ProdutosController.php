<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $produtos = Produto::query()->orderBy('nome')->get();
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
    public function store(Request $request)
    {
        $produtos = Produto::create($request->all());


        return to_route('produtos.index')
            ->with('mensagem.sucesso', "Produto '{$produtos->nome}' adicionada com sucesso");
    }

}
