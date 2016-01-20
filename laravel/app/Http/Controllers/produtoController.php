<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class produtoController extends Controller
{
    //
     public function index()
    {
        return view('painel.produtos.index', ['nome' => 'Carlos Ferreira']);
    }

    public function create()
    {
        return view('painel.produtos.create-edit');
    }

    public function storage()
    {

    }

    public function show($idProd)
    {
        return "Mostra o produto => {$idProd}";
    }

    public function edit($idProduto)
    {
        return view('painel.produtos.create-edit');
    }



}
