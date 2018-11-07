<?php

namespace App\Http\Controllers\page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\eventos;

class FooterController extends Controller
{
    private $dia = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];
    
    public function getFooter() {
        
        $url = file_get_contents('http://pox.globo.com/rss/g1/');
        $resposta = [ 
            'g1' => simplexml_load_string($url)->channel,
            'eventos' => eventos::join('categorias', 'eventos.categoria_id', '=', 'categorias.id')
                ->select('eventos.id', 'eventos.nome as evento', 'cartaz', 'local', 'template', 'site', 'data', 'categorias.nome as categoria')
                ->orderBy('eventos.id', 'desc')->limit(3)->get()->transform(function($item, $key){
                return [
                    'id' => $item->id,
                    'nome' => $item->evento,
                    'local' => $item->local,
                    'template' => $item->template,
                    'site' => $item->site,
                    'categoria' => $item->categoria,
                    'cartaz' => $item->cartaz ? url('uploads/eventos/' . $item->cartaz) : null,
                    'dia' => $this->dia[(int) date('N', strtotime($item->data)) - 1],
                    'mes' => date('d/m', strtotime($item->data)),
                    'hora' => date('H/m', strtotime($item->data)) . 'h'
                ];
            })
        ];

        return compact('resposta');
    }
}
