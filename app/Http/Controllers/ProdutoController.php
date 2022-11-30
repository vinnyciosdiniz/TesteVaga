<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    
    public function index()
    {
        $produtos = Produto::orderBy('id','desc')->paginate(5);
        return view('produtos.index', compact('produtos'));
    }

    
    public function create()
    {
        return view('produtos.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'valor' => 'required',
            'qunatidade' => 'required',
        ]);
        
        Produto::create($request->post());

        return redirect()->route('produtos.index')->with('success','Produto criado com sucesso.');
    }

    
    public function show(Produto $product)
    {
        return view('produtos.show',compact('product'));
    }

    
    public function edit(Produto $product)
    {
        return view('produtos.edit',compact('product'));
    }

    
    public function update(Request $request, Produto $product)
    {
        $request->validate([
            'nome' => 'required',
            'valor' => 'required',
            'quantidade' => 'required',
        ]);
        
        $product->fill($request->post())->save();

        return redirect()->route('produtos.index')->with('success','Produto atualizado.');
    }

    
    public function destroy(Produto $product)
    {
        $product->delete();
        return redirect()->route('produtos.index')->with('success','Produto deletado.');
    }
}
