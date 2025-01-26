<?php

namespace App\Http\Controllers\Produto;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Produto\ProdutoRequest;
use App\Models\Produto\Produtos;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $produtos = Produtos::query();

        if($request->nome_produto) {
            $produtos->where('nome', 'like', '%' . $request->nome_produto . '%');
        }
        if($request->quantidade_produto) {
            $produtos->where('quantidade', 'like', '%' . $request->quantidade_produto . '%');
        }
        if($request->descricao_produto) {
            $produtos->where('descricao_produto', 'like', '%' . $request->descricao_produto . '%');
        }

        $produtos = $produtos->get();

        return view('Produto.index', ['produtos' => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Produto.form', ['produto' => new Produtos()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd('Request', $request);
        $produto = Produtos::create([
            'nome' => $request->nome_produto,
            'quantidade' => $request->quantidade_produto,
            'fabricacao' => $request->fabricacao_produto,
            'descricao' => $request->descricao_produto
        ]);

        return view('Produto.form', ['produto' => $produto])->with('success', 'Produto cadastrado com sucesso!');
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

        return view('Produto.form', ['produto' => $produto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Produtos::where('id', $id)->update([
            'nome' => $request['nome_produto'],
            'quantidade' => $request['quantidade_produto'],
            'fabricacao' => $request['fabricacao_produto'],
            'descricao' => $request['descricao_produto']
        ]);

        return redirect()->route('produtos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Produtos::where('id', $id)->delete();

        return redirect()->route('produtos.index');
    }
}
