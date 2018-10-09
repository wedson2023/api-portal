<?php

namespace App\Http\Controllers\page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\guiaComercial;
use App\contato_web;
use App\botoes;

class GuiaComercialController extends Controller
{

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
                'capa' => !$item->capa ? url('uploads/guiaComercial/guia.jpg') : url('uploads/guiaComercial/' . $item->capa),
                'site' => contato_web::where('guia_id', '=', $item->id, 'and')->where('nome', '=', 'site')->first(),
                'email' => contato_web::where('guia_id', '=', $item->id, 'and')->where('nome', '=', 'email')->first()
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
