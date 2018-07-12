<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\guiaComercial;
use App\contato_web;
class GuiaComercialController extends UploadController
{
    public function listar() {
        $registros = guiaComercial::Paginate(10);
        return compact('registros');
    }
    
    public function cadastro(Request $request){
        
        $resposta = new guiaComercial;
        
        if(isset($_FILES['capa'])):
            $file = $_FILES['capa']; 
            $capa = UploadController::UploadImage($file, 'uploads/guiaComercial/', 300);
            $resposta->capa = $capa;
        endif;
        
        $resposta->nome = $request->input('nome');
        $resposta->endereco = $request->input('endereco');
        $resposta->telefones = $request->input('telefones');
        $resposta->horario = $request->input('horario');
        $resposta->formas_pagamento = $request->input('formas_pagamento');
        $resposta->template = $request->input('template');
        $resposta->ativo = $request->input('ativo'); 
        
        $resposta->save();
        
        foreach($request->input('contato') as $key => $val):
            contato_web::insert([ 'guia_id' => $resposta->id, 'nome' => $key, 'url' => $val ]);
        endforeach;
        
        return compact('resposta');
    }
}
