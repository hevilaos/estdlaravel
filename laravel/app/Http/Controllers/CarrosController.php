<?php

namespace App\Http\Controllers;

use DB;


class CarrosController extends Controller
{

    public function getIndex(){

        $carros =DB::table('carros')->get();

        return view('painel.carros.index', compact('carros'));
    }

    public function getAdicionar(){
        return view('painel.carros.create-edit');
    }

    public function getEditar($idCarro){
        return view('painel.carros.create-edit', ['idCarro' => $idCarro]);
    }

    public function postEditar($array = array()){
        return "Editando o carro...";
    }

    public function getDeletar($idCarro){
        return "Deletando carro => {$idCarro}";
    }

    public function getListaCarrosLuxo(){
        return 'Listando carros de luxo';
    }

    public function missingMethod($params = array()){
        return 'Ops! Você digitou uma página inexistente =/ ';
    }


}
