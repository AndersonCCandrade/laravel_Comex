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
        $categoria = Categoria::all();
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

    public function edit(Categoria $categoria)
    {
        return view('categorias.edit')->with('categoria', $categoria);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Categoria $categoria, CategoriasFormRequest $request)
    {
        $categoria->fill($request->all());
        $categoria->save();

        return to_route('categorias.index')
            ->with('mensagem.sucesso', "Categoria '{$categoria->nome}' atualizada com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();

        return to_route('categorias.index')->with('mensagem.sucesso', "Categoria '{$categoria->nome}' removida com sucesso");
    }
}
