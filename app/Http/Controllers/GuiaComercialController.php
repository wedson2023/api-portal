<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\guiaComercial;
use App\contato_web;
use App\botoes;
use App\galeria;
class GuiaComercialController extends UploadController
{
    
    public function empresa($id){
        $resposta = guiaComercial::find($id);
        $resposta->contato = $resposta->contato;
        $resposta->botao = botoes::limit(4)->get();
        $resposta->galeria = galeria::where('guia_id', '=', $id)
            ->limit(8)
            ->get()
            ->transform(function($item,$key){
                return [
                    'nome' => url('uploads/galeria/' . $item->nome)
                ];
            });
        return compact('resposta');
    }
    
    public function listar() {
        $registros = guiaComercial::orderBy('id', 'desc')->Paginate(100);
        return compact('registros');
    }
    
    public function deletar(Request $request){
        $resposta = guiaComercial::find($request->input('id'));        
        if(!is_null($resposta->capa)):
            unlink('uploads/guiaComercial/' . $resposta->capa);    
        endif; 
        
        $resposta = guiaComercial::destroy($request->input('id'));
        return compact('resposta');
    }
    
    public function editar(Request $request){
        
        $resposta = guiaComercial::find($request->input('id'));
        
        if(isset($_FILES['capa'])):
            if(!is_null($resposta->capa)):
                unlink('uploads/guiaComercial/' . $resposta->capa);    
            endif;
            $file = $_FILES['capa']; 
            $capa = UploadController::UploadImage($file, 'uploads/guiaComercial/', 700);
            $resposta->capa = $capa;
        endif;
        
        $resposta->nome = $request->input('nome');
        $resposta->endereco = $request->input('endereco');
        $resposta->telefones = $request->input('telefones');
        $resposta->horario = $request->input('horario');
        $resposta->cidade = $request->input('cidade');
        $resposta->segmento_id = $request->input('segmento_id');
        $resposta->formas_pagamento = $request->input('formas_pagamento');
        $resposta->template = $request->input('template');
        $resposta->ativo = $request->input('ativo'); 
        $resposta->destaque = $request->input('destaque'); 
        
        $resposta->save();
        
        foreach($request->input('contato') as $key => $val):
            contato_web::where('guia_id', '=', $request->input('id'), 'and')->where('nome', '=', $key)->update([ 'nome' => $key, 'url' => $val ]);
        endforeach;
        
        return compact('resposta');
    }
    
    public function cadastro(Request $request){
        
        $resposta = new guiaComercial;
        
        if(isset($_FILES['capa'])):
            $file = $_FILES['capa']; 
            $capa = UploadController::UploadImage($file, 'uploads/guiaComercial/', 700);
            $resposta->capa = $capa;
        endif;
        
        $resposta->nome = $request->input('nome');
        $resposta->endereco = $request->input('endereco');
        $resposta->telefones = $request->input('telefones');
        $resposta->horario = $request->input('horario');
        $resposta->cidade = $request->input('cidade');
        $resposta->segmento_id = $request->input('segmento_id');
        $resposta->formas_pagamento = $request->input('formas_pagamento');
        $resposta->template = $request->input('template');
        $resposta->ativo = $request->input('ativo');
        $resposta->destaque = $request->input('destaque');
        
        $resposta->save();
        
        foreach($request->input('contato') as $key => $val):
            contato_web::insert([ 'guia_id' => $resposta->id, 'nome' => $key, 'url' => $val ]);
        endforeach;
        
        return compact('resposta');
    }
}
