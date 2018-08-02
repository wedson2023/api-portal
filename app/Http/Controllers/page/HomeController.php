<?php

namespace App\Http\Controllers\page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\noticias;
use App\segmentos;

class HomeController extends Controller
{
    public function getHome() {
        $resposta = [ 
            'guiaMedico' => segmentos::select('id', 'nome')->where('categoria_id', '=', 1)->get(),
            'diskDelivery' => segmentos::select('id', 'nome')->where('categoria_id', '=', 2)->get(),
            'ondeHospedar' => segmentos::select('id', 'nome')->where('categoria_id', '=', 3)->get(),
            'ondeComer' => segmentos::select('id', 'nome')->where('categoria_id', '=', 4)->get(),
            'transportes' => segmentos::select('id', 'nome')->where('categoria_id', '=', 5, 'and')->whereIn('id', [18, 19, 20, 21, 22])->get(),
            'classificados' => segmentos::select('id', 'nome')->where('categoria_id', '=', 6, 'and')->whereIn('id', [23, 24, 25, 26, 27])->get(),
            'outros' => segmentos::select('id', 'nome')->where('categoria_id', '=', 7, 'and')->whereIn('id', [28, 29, 30, 31, 32, 33, 34])->get(),
            'noticias' => noticias::where('destaque', '=', 0, 'and')->where('ativo', '=', 1)->orderBy('id', 'desc')->limit(7)->get()->transform(function($item, $key){
                return [
                    'id' => $item->id,
                    'titulo' => substr($item->titulo, 0, 80),
                    'categoria' => substr($item->categoria, 0, 20),
                    'subtitulo' => substr($item->subtitulo, 0, 135),
                    'capa' => url('uploads/noticias/' . $item->capa),
                    'url' => urlencode($item->titulo)
                ];
            }),
            'destaque' => noticias::where('destaque', '=', 1, 'and')->where('ativo', '=', 1)->orderBy('id', 'desc')->limit(1)->get()->transform(function($item, $key){
                return [
                    'id' => $item->id,
                    'titulo' => substr($item->titulo, 0, 80),
                    'categoria' => substr($item->categoria, 0, 20),
                    'subtitulo' => substr($item->subtitulo, 0, 135),
                    'capa' => url('uploads/noticias/' . $item->capa),
                    'url' => urlencode($item->titulo)
                ];
            })[0]
        ];

        return compact('resposta');
    }
    
    public function mostrarNoticia($url){

        $url = urldecode($url);
        $resposta = noticias::select('template', 'categoria')->where('titulo', '=', $url)->first();
        $relacionados = noticias::where('categoria', '=', $resposta->categoria, 'and')->where('ativo', '=', 1)->orderByRaw('rand()')->limit(4)->get()->transform(function($item, $key){
                return [
                    'id' => $item->id,
                    'titulo' => substr($item->titulo, 0, 80),
                    'categoria' => substr($item->categoria, 0, 20),
                    'subtitulo' => substr($item->subtitulo, 0, 135),
                    'capa' => url('uploads/noticias/' . $item->capa),
                    'url' => urlencode($item->titulo)
                ];
            });

        return compact('resposta', 'relacionados');
    }
}
