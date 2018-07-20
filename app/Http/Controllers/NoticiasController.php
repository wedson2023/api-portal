<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noticias;

class NoticiasController extends UploadController
{
    
    public function noticia($id){
        $resposta = noticias::find($id);
        return compact('resposta');
    }
    
    public function listar(Request $request) {
        $registros = noticias::Paginate(10);
        return compact('registros');
    }
    
    public function deletar(Request $request){
        
        $resposta = noticias::find($request->input('id'));        
        if(!is_null($resposta->capa)):
            unlink('uploads/noticias/' . $resposta->capa);    
        endif;        
        
        $resposta = noticias::destroy($request->input('id'));
        return compact('resposta');
    }
    
    public function editar(Request $request){
        
        $resposta = noticias::find($request->input('id'));
        
        if(isset($_FILES['capa'])):
            if(!is_null($resposta->capa)):
                unlink('uploads/noticias/' . $resposta->capa);    
            endif;
            $file = $_FILES['capa']; 
            $capa = UploadController::UploadImage($file, 'uploads/noticias/', 700);
            $resposta->capa = $capa;
        endif;
        
        $resposta = noticias::where('id', '=', $request->input('id'))->update([
            'capa' => isset($capa) ? $capa : $resposta->capa,
            'fonte' => $request->input('fonte'),
            'titulo' => $request->input('titulo'),
            'subtitulo' => $request->input('subtitulo'),
            'categoria' => $request->input('categoria'),
            'destaque' => $request->input('destaque'),
            'ativo' => $request->input('ativo'),
            'template' => $request->input('template')
        ]);
        
        return compact('resposta');
    }
    
    public function cadastro(Request $request){
        
        $file = $_FILES['capa'];        
        $capa = UploadController::UploadImage($file, 'uploads/noticias/', 700);
        $resposta = noticias::insert([
            'capa' => $capa,
            'fonte' => $request->input('fonte'),
            'titulo' => $request->input('titulo'),
            'subtitulo' => $request->input('subtitulo'),
            'categoria' => $request->input('categoria'),
            'destaque' => $request->input('destaque'),
            'ativo' => $request->input('ativo'),
            'template' => $request->input('template')
        ]);
        
        return compact('resposta');
    }

    // site

    public function listarHome(){

        $resposta = [ 
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

    public function mostrar($url){

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
