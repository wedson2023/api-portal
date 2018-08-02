<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\guiaComercial;
use App\contato_web;
class GuiaComercialController extends UploadController
{
    
    public function empresa($id){
        $resposta = guiaComercial::find($id);
        $resposta->contato = $resposta->contato;
        return compact('resposta');
    }
    
    public function listar() {
        $registros = guiaComercial::Paginate(10);
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
        
        $resposta->save();
        
        foreach($request->input('contato') as $key => $val):
            contato_web::insert([ 'guia_id' => $resposta->id, 'nome' => $key, 'url' => $val ]);
        endforeach;
        
        return compact('resposta');
    }
    
    // rotas páginas
    
    public function listarSegmentos() {
        $resposta = guiaComercial::select('segmentos.id', 'segmentos.nome')->join('segmentos', 'segmento_id', '=', 'segmentos.id')->distinct()->get();
        return compact('resposta');
    }
    
    public function listarEmpresas($pagina, $segmento, $cidade, $categoria) {
        
        $max_paginacao = 15; 
        $offset = !is_null($pagina) ? ($pagina / $max_paginacao - $max_paginacao) : 0; 
        
        
        if($segmento != 'segmento' and $cidade != 'cidade' and $categoria  != 'categoria'):
            $count = guiaComercial::select('guia_comercials.*')
                    ->join('segmentos', 'segmento_id', '=', 'segmentos.id')
                    ->where('cidade', 'like', '%' . $cidade . '%', 'and')
                    ->where('segmento_id', '=', $segmento, 'and')
                    ->where('categoria_id', '=', $categoria)
                    ->count();

            $resposta = guiaComercial::select('guia_comercials.*')
                    ->join('segmentos', 'segmento_id', '=', 'segmentos.id')
                    ->where('cidade', 'like', '%' . $cidade . '%', 'and')
                    ->where('segmento_id', '=', $segmento, 'and')
                    ->where('categoria_id', '=', $categoria)
                    ->offset($offset)
                    ->limit($max_paginacao)
                    ->get();
        elseif($segmento != 'segmento' and $cidade != 'cidade'):
            $count = guiaComercial::select('guia_comercials.*')
                    ->join('segmentos', 'segmento_id', '=', 'segmentos.id')
                    ->where('cidade', 'like', '%' . $cidade . '%', 'and')
                    ->where('segmento_id', '=', $segmento)
                    ->count();

            $resposta = guiaComercial::select('guia_comercials.*')
                    ->join('segmentos', 'segmento_id', '=', 'segmentos.id')
                    ->where('cidade', 'like', '%' . $cidade . '%', 'and')
                    ->where('segmento_id', '=', $segmento)
                    ->offset($offset)
                    ->limit($max_paginacao)
                    ->get();
          
        elseif($segmento != 'segmento' and $categoria != 'categoria'):
            $count = guiaComercial::select('guia_comercials.*')
                    ->join('segmentos', 'segmento_id', '=', 'segmentos.id')
                    ->where('segmento_id', '=', $segmento, 'and')
                    ->where('categoria_id', '=', $categoria)
                    ->count();

            $resposta = guiaComercial::select('guia_comercials.*')
                    ->join('segmentos', 'segmento_id', '=', 'segmentos.id')
                    ->where('segmento_id', '=', $segmento, 'and')
                    ->where('categoria_id', '=', $categoria)
                    ->offset($offset)
                    ->limit($max_paginacao)
                    ->get();
            
        elseif($cidade != 'cidade' and $categoria != 'categoria'):
            $count = guiaComercial::select('guia_comercials.*')
                    ->join('segmentos', 'segmento_id', '=', 'segmentos.id')
                    ->where('cidade', 'like', '%' . $cidade . '%', 'and')
                    ->where('categoria_id', '=', $categoria)
                    ->count();

            $resposta = guiaComercial::select('guia_comercials.*')
                    ->join('segmentos', 'segmento_id', '=', 'segmentos.id')
                    ->where('cidade', 'like', '%' . $cidade . '%', 'and')
                    ->where('categoria_id', '=', $categoria)
                    ->offset($offset)
                    ->limit($max_paginacao)
                    ->get();
            
        elseif($segmento != 'segmento'):
            $count = guiaComercial::select('guia_comercials.*')
                    ->join('segmentos', 'segmento_id', '=', 'segmentos.id')
                    ->where('segmento_id', '=', $segmento)
                    ->count();

            $resposta = guiaComercial::select('guia_comercials.*')
                    ->join('segmentos', 'segmento_id', '=', 'segmentos.id')
                    ->where('segmento_id', '=', $segmento)
                    ->offset($offset)
                    ->limit($max_paginacao)
                    ->get();
            
        elseif($cidade != 'cidade'):
            $count = guiaComercial::select('guia_comercials.*')
                    ->join('segmentos', 'segmento_id', '=', 'segmentos.id')
                    ->where('cidade', 'like', '%' . $cidade . '%', 'and')
                    ->count();

            $resposta = guiaComercial::select('guia_comercials.*')
                    ->join('segmentos', 'segmento_id', '=', 'segmentos.id')
                    ->where('cidade', 'like', '%' . $cidade . '%', 'and')
                    ->offset($offset)
                    ->limit($max_paginacao)
                    ->get();
        elseif($categoria != 'categoria'):
            $count = guiaComercial::select('guia_comercials.*')
                    ->join('segmentos', 'segmento_id', '=', 'segmentos.id')
                    ->where('categoria_id', '=', $categoria)
                    ->count();

            $resposta = guiaComercial::select('guia_comercials.*')
                    ->join('segmentos', 'segmento_id', '=', 'segmentos.id')
                    ->where('categoria_id', '=', $categoria)
                    ->offset($offset)
                    ->limit($max_paginacao)
                    ->get();
            else:
            $count = guiaComercial::select('guia_comercials.*')
                    ->join('segmentos', 'segmento_id', '=', 'segmentos.id')
                    ->count();

            $resposta = guiaComercial::select('guia_comercials.*')
                    ->join('segmentos', 'segmento_id', '=', 'segmentos.id')
                    ->offset($offset)
                    ->limit($max_paginacao)
                    ->get();
        endif;
        
//        if($categoria != 'categoria' and $segmento != 'segmento' and $cidade  != 'cidade'):;
//                $count = guiaComercial::join('segmentos', 'segmento_id', '=', 'segmentos.id')->where('cidade', 'like', '%' . $cidade . '%', 'and')->where('segmento_id', '=', $segmento)->where('categoria_id', '=', $categoria)->count();
//                $resposta = guiaComercial::select('guia_comercials.*')->join('segmentos', 'segmento_id', '=', 'segmentos.id')->where('cidade', 'like', '%' . $cidade . '%', 'and')->where('segmento_id', '=', $segmento)->where('categoria_id', '=', $categoria)->offset($offset)->limit($max_paginacao)->get();      
//            elseif($categoria != 'categoria'):
//                $count = guiaComercial::join('segmentos', 'segmento_id', '=', 'segmentos.id')->where('categoria_id', '=', $categoria)->count();
//                $resposta = guiaComercial::select('guia_comercials.*')->join('segmentos', 'segmento_id', '=', 'segmentos.id')->where('categoria_id', '=', $categoria)->offset($offset)->limit($max_paginacao)->get();      
//            elseif($segmento != 'segmento' and $cidade  != 'cidade'):
//                $count = guiaComercial::where('cidade', 'like', '%' . $cidade . '%', 'and')->where('segmento_id', '=', $segmento)->count();
//                $resposta = guiaComercial::where('cidade', 'like', '%' . $cidade . '%', 'and')->where('segmento_id', '=', $segmento)->offset($offset)->limit($max_paginacao)->get();
//            elseif($segmento != 'segmento'):
//                $count = guiaComercial::where('segmento_id', '=', $segmento)->count();
//                $resposta = guiaComercial::where('segmento_id', '=', $segmento)->offset($offset)->limit($max_paginacao)->get();
//            elseif($cidade  != 'cidade'):
//                $count = guiaComercial::where('cidade', 'like', '%' . $cidade . '%')->count();
//                $resposta = guiaComercial::where('cidade', 'like', '%' . $cidade . '%')->offset($offset)->limit($max_paginacao)->get();
//            else:
//                $count = guiaComercial::count();
//                $resposta = guiaComercial::offset($offset)->limit($max_paginacao)->get();
//        endif;
        
        $a = 0;        
        while($a <= ceil($count / $max_paginacao - $max_paginacao)):
            $nav[] = $a + 1;
            $a++;
        endwhile;        
        
        $resposta->transform(function($item, $key){;
            return [
                'id' => $item->id,
                'nome' => $item->nome,
                'endereco' => $item->endereco,
                'telefones' => $item->telefones,
                'capa' => !$item->capa ? url('uploads/guiaComercial/guia.jpg') : $item->capa,
                'site' => contato_web::where('guia_id', '=', $item->id, 'and')->where('nome', '=', 'site')->first()->url,
                'email' => contato_web::where('guia_id', '=', $item->id, 'and')->where('nome', '=', 'email')->first()->url
            ];
        });
        
        return compact('resposta', 'nav');
    }
    
    public function quantidade() {       
        $count = guiaComercial::count();
        
        $a = 1;        
        while($a <= ceil($count / 1 * 1)):
            $nav[] = $a;
            $a++;
        endwhile;
        
        return compact('count', 'nav');
    }
}
