<?php

namespace App\Http\Controllers\page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\noticias;

class NoticiasController extends Controller
{
    public function listar(){
    	$resposta = noticias::limit(15)->orderBy('id', 'desc')->get()->transform(function($item, $key){
    		return [
    			'id' => $item->id,
    			'fonte' => $item->fonte,
    			'capa' => $item->capa ? url('uploads/noticias/' . $item->capa) : null,
    			'titulo' => substr($item->titulo, 0, 45) . '...',
    			'subtitulo' => substr($item->subtitulo, 0, 250),
    			'created_at' => $item->created_at,
    			'categoria' => $item->categoria,
                'url' => urlencode($item->titulo)
    		];
    	});
    	return compact('resposta');
    }
}
