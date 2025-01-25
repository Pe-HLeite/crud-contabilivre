<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;
use App\Services\ProdutosServices;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd('Passando por aqui');
        $produtos = Produtos::all();

        return view('Produtos.index', ['produtos' => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Produtos.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produto = Produtos::create([
            'nome' => $request['nome_produto'],
            'quantidade' => $request['quantidade_produto'],
            'fabricacao' => $request['fabricacao_produto'],
            'descricao' => $request['descricao_produto']
        ]);
        
        return redirect()->route('produto-edicao', $produto->id)
            ->with('succes', 'Produto cadastrado com sucesso');
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
        $produto = Produtos::FindOrFail($id);

        return view('Produtos.edicao', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produto = Produtos::where('id', $id)->update([
            'nome' => $request['nome_produto'],
            'quantidade' => $request['quantidade_produto'],
            'fabricacao' => $request['fabricacao_produto'],
            'descricao' => $request['descricao_produto']
        ]);

        return view('Produtos.edicao', compact('produto'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
