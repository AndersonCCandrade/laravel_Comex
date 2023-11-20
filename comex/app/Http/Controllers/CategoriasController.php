<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriasFormRequest;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categoria = Categoria::query()->orderBy('nome')->get();
        $mensagemSucesso = session('mensagem.sucesso');


        return view("categorias.index", compact('categoria'))
            ->with('mensagemSucesso', $mensagemSucesso);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoriasFormRequest $request)
    {

        $categoria = Categoria::create($request->all());


        return to_route('categorias.index')
            ->with('mensagem.sucesso', "Categoria '{$categoria->nome}' adicionada com sucesso");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
       Categoria::destroy($request->id);

        return to_route('categorias.index')->with('mensagem.sucesso', "Categoria '{$request->nome}' removida com sucesso");
    }
}
