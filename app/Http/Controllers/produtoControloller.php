<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;

class produtoControloller extends Controller
{
    public function index(Request $request){
        $data = [];
        $listaProdutos = Produto::all();
        $data["lista"] = $listaProdutos;
        return view('welcome', $data);
    }

    public function categoria(Request $request){
        $data = [];

        $listaCategorias = Categoria::all();
        $listaProdutos = Produto::limit(4)->get();

        $data["lista"] = $listaProdutos;
        $data["listaCategoria"] = $listaCategorias;
        return view('categoria', $data);
    }
}
